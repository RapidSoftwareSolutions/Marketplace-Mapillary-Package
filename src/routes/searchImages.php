<?php
$app->post('/api/Mapillary/searchImages', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['clientId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . "images";
    $body = array();
    $body['client_id'] = $post_data['args']['clientId'];
    if (isset($post_data['args']['closeToLongitude']) && strlen($post_data['args']['closeToLongitude']) > 0 && isset($post_data['args']['closeToLatitude']) && strlen($post_data['args']['closeToLatitude']) > 0) {
        $body['closeto'] = $post_data['args']['closeToLongitude'] . ',' . $post_data['args']['closeToLatitude'];
    }

    if (isset($post_data['args']['lookAtLongitude']) && strlen($post_data['args']['lookAtLongitude']) > 0 && isset($post_data['args']['lookAtLatitude']) && strlen($post_data['args']['lookAtLatitude']) > 0) {
        $body['lookat'] = $post_data['args']['lookAtLongitude'] . ',' . $post_data['args']['lookAtLatitude'];
    }

    if (isset($post_data['args']['minBoundingBoxX']) && strlen($post_data['args']['minBoundingBoxX'])> 0 && isset($post_data['args']['minBoundingBoxY']) && strlen($post_data['args']['minBoundingBoxY']) > 0 && isset($post_data['args']['maxBoundingBoxX']) && strlen($post_data['args']['maxBoundingBoxX']) > 0 && isset($post_data['args']['maxBoundingBoxY']) && strlen($post_data['args']['maxBoundingBoxY']) > 0){
        $body['bbox'] = $post_data['args']['minBoundingBoxX'].','. $post_data['args']['minBoundingBoxY'].','.$post_data['args']['maxBoundingBoxX'].','.$post_data['args']['maxBoundingBoxY'];
    }

    if (isset($post_data['args']['radius']) && strlen($post_data['args']['radius']) > 0){
        $body['radius'] = $post_data['args']['radius'];
    }

    if (isset($post_data['args']['userKeys']) && strlen($post_data['args']['userKeys']) > 0){
        $body['userkeys'] = $post_data['args']['userKeys'];
    }


    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('GET', $query_str, [
            'query' => $body
        ]);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());

        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
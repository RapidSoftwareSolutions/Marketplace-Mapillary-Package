<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class MapillaryTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
            'getUserStatistics',
            'getSingleUser',
            'searchUsers',
            'getSingleDetection',
            'searchDetections',
            'getSingleMap',
            'searchMaps',
            'getSingleChangeset',
            'searchChangesets',
            'getSingleSequence',
            'searchSequences',
            'getSingleImageDetections',
            'getSingleImage',
            'searchImages'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Mapillary/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}

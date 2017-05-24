[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Mapillary/functions?utm_source=RapidAPIGitHub_MapillaryFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Mapillary Package
Mapillary
* Domain: mapillary.com
* Credentials: clientId

## How to get credentials: 
0. Go to [Mapillary website](https://mapillary.com) 
1. Log in or create a new account
2. Create new aplication
2. Go to [Developers page](https://www.mapillary.com/app/settings/developers) to get your client ID

## Mapillary.searchImages
Search images

| Field              | Type       | Description
|--------------------|------------|----------
| clientId           | credentials| Client Id obtained from Mapillary
| closeToCoordinates | String     | Coma separated coordinates for the filter by a location that images are close to
| lookAtCoordinates  | String     | Coma separated coordinates for the filter by a location that images are taken in the direction of the specified point (and therefore that point is likely to be visible in the images)
| minBoundingBoxX    | String     | Minimal X for filter by the bounding box
| minBoundingBoxY    | String     | Minimal Y for filter by the bounding box
| maxBoundingBoxX    | String     | Maximal X for filter by the bounding box
| minBoundingBoxY    | String     | Maximal Y for filter by the bounding box
| radius             | String     | Filter images within the radius around the  closeTo location (default  100 meters).
| userKeys           | String     | Filter images captured by users.

## Mapillary.getSingleImage
Given an imageId, retrieve the image object.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client Id obtained from Mapillary
| imageId | String     | ID of the image

## Mapillary.searchSequences
Search sequences

| Field          | Type       | Description
|----------------|------------|----------
| clientId       | credentials| Client Id obtained from Mapillary
| minBoundingBoxX| String     | Minimal X for filter by the bounding box
| minBoundingBoxY| String     | Minimal Y for filter by the bounding box
| maxBoundingBoxX| String     | Maximal X for filter by the bounding box
| minBoundingBoxY| String     | Maximal Y for filter by the bounding box
| userKeys       | String     | Filter images captured by users.

## Mapillary.getSingleSequence
Given an sequenceId, retrieve the sequence object.

| Field     | Type       | Description
|-----------|------------|----------
| clientId  | credentials| Client Id obtained from Mapillary
| sequenceId| String     | ID of the sequence

## Mapillary.searchChangesets
Search changesets

| Field          | Type       | Description
|----------------|------------|----------
| clientId       | credentials| Client Id obtained from Mapillary
| minBoundingBoxX| String     | Minimal X for filter by the bounding box
| minBoundingBoxY| String     | Minimal Y for filter by the bounding box
| maxBoundingBoxX| String     | Maximal X for filter by the bounding box
| minBoundingBoxY| String     | Maximal Y for filter by the bounding box
| userKeys       | String     | Filter images captured by users.
| states         | String     | Changeset state. Possible values: pending, approved, rejected
| types          | String     | Changeset types. Possible values: location, deletion

## Mapillary.getSingleChangeset
Given a changesetId, retrieve the changeset object.

| Field      | Type       | Description
|------------|------------|----------
| clientId   | credentials| Client Id obtained from Mapillary
| changesetId| String     | ID of the changeset

## Mapillary.searchMaps
Search maps objects

| Field          | Type       | Description
|----------------|------------|----------
| clientId       | credentials| Client Id obtained from Mapillary
| minBoundingBoxX| String     | Minimal X for filter by the bounding box
| minBoundingBoxY| String     | Minimal Y for filter by the bounding box
| maxBoundingBoxX| String     | Maximal X for filter by the bounding box
| minBoundingBoxY| String     | Maximal Y for filter by the bounding box

## Mapillary.getSingleMap
Given an mapId, retrieve the map object.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client Id obtained from Mapillary
| mapId   | String     | ID of the map

## Mapillary.searchDetections
Search detection objects

| Field          | Type       | Description
|----------------|------------|----------
| clientId       | credentials| Client Id obtained from Mapillary
| minBoundingBoxX| String     | Minimal X for filter by the bounding box
| minBoundingBoxY| String     | Minimal Y for filter by the bounding box
| maxBoundingBoxX| String     | Maximal X for filter by the bounding box
| minBoundingBoxY| String     | Maximal Y for filter by the bounding box

## Mapillary.getSingleDetection
Given a detectionId, retrieve the detection object.

| Field      | Type       | Description
|------------|------------|----------
| clientId   | credentials| Client Id obtained from Mapillary
| detectionId| String     | ID of the detection

## Mapillary.searchUsers
Search user objects

| Field          | Type       | Description
|----------------|------------|----------
| clientId       | credentials| Client Id obtained from Mapillary
| minBoundingBoxX| String     | Minimal X for filter by the bounding box
| minBoundingBoxY| String     | Minimal Y for filter by the bounding box
| maxBoundingBoxX| String     | Maximal X for filter by the bounding box
| minBoundingBoxY| String     | Maximal Y for filter by the bounding box

## Mapillary.getSingleUser
Given an userId, retrieve the user object.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client Id obtained from Mapillary
| userId  | String     | Key of the user

## Mapillary.getUserStatistics
Given an userId, retrieve the user object statistics.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client Id obtained from Mapillary
| userId  | String     | Key of the user


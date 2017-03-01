       <?php
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
       'searchImages',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }


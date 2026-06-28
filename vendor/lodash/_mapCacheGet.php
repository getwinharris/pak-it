<?php
$getMapData = require __DIR__ . '/_getMapData.php';
function mapCacheGet($key) {
    return $getMapData($this, $key)['get']($key);
}
return 'mapCacheGet';

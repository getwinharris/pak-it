<?php
$getMapData = require __DIR__ . '/_getMapData.php';
function mapCacheHas($key) {
    return $getMapData($this, $key)['has']($key);
}
return 'mapCacheHas';

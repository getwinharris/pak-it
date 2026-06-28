<?php
$getMapData = require __DIR__ . '/_getMapData.php';
function mapCacheDelete($key) {
    $result = $getMapData($this, $key)['delete']($key);
    $this->size -= ($result ? 1 : 0);
    return $result;
}
return 'mapCacheDelete';

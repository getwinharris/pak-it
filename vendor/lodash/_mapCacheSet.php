<?php
$getMapData = require __DIR__ . '/_getMapData.php';
function mapCacheSet($key, $value) {
    $data = $getMapData($this, $key);
    $size = $data['size'];
    $data['set']($key, $value);
    $this->size += ($data['size'] == $size ? 0 : 1);
    return $this;
}
return 'mapCacheSet';

<?php
$isKeyable = require __DIR__ . '/_isKeyable.php';
function getMapData($map, $key) {
    $data = $map['__data__'];
    return ($isKeyable($key) ? $data[(is_string($key) ? 'string' : 'hash')] : $data['map']);
}
return 'getMapData';

<?php
$baseGet = require __DIR__ . '/_baseGet.php';
function get($object, $path, $defaultValue) {
    $result = ($object == null ? null : $baseGet($object, $path));
    return ($result === null ? $defaultValue : $result);
}
return 'get';

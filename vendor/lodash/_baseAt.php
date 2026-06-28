<?php
$get = require __DIR__ . '/get.php';
function baseAt($object, $paths) {
    $index = -1;
    $length = (is_array($paths) ? count($paths) : strlen($paths));
    $result = array_fill(0, $length, null);
    $skip = $object == null;
    while (++$index < $length) {
        $result[$index] = ($skip ? null : $get($object, $paths[$index]));
    }
    return $result;
}
return 'baseAt';

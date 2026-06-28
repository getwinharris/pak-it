<?php
$baseUpdate = require __DIR__ . '/_baseUpdate.php';
$castFunction = require __DIR__ . '/_castFunction.php';
function updateWith($object, $path, $updater, $customizer) {
    $customizer = (is_callable($customizer) ? $customizer : null);
    return ($object == null ? $object : $baseUpdate($object, $path, $castFunction($updater), $customizer));
}
return 'updateWith';

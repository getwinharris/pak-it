<?php
$baseUpdate = require __DIR__ . '/_baseUpdate.php';
$castFunction = require __DIR__ . '/_castFunction.php';
function update($object, $path, $updater) {
    return ($object == null ? $object : $baseUpdate($object, $path, $castFunction($updater)));
}
return 'update';

<?php
$baseGet = require __DIR__ . '/_baseGet.php';
$baseSet = require __DIR__ . '/_baseSet.php';
function baseUpdate($object, $path, $updater, $customizer) {
    return $baseSet($object, $path, $updater($baseGet($object, $path)), $customizer);
}
return 'baseUpdate';

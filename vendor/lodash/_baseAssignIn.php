<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$keysIn = require __DIR__ . '/keysIn.php';
function baseAssignIn($object, $source) {
    return $object && $copyObject($source, $keysIn($source), $object);
}
return 'baseAssignIn';

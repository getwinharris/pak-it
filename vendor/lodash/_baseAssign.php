<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$keys = require __DIR__ . '/keys.php';
function baseAssign($object, $source) {
    return $object && $copyObject($source, $keys($source), $object);
}
return 'baseAssign';

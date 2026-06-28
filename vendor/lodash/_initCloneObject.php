<?php
$baseCreate = require __DIR__ . '/_baseCreate.php';
$getPrototype = require __DIR__ . '/_getPrototype.php';
$isPrototype = require __DIR__ . '/_isPrototype.php';
function initCloneObject($object) {
    return (is_callable($object['constructor']) && !$isPrototype($object) ? $baseCreate($getPrototype($object)) : []);
}
return 'initCloneObject';

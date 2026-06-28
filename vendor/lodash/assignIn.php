<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$createAssigner = require __DIR__ . '/_createAssigner.php';
$keysIn = require __DIR__ . '/keysIn.php';
$assignIn = $createAssigner(function($object, $source) {
        $copyObject($source, $keysIn($source), $object);
});
return 'assignIn';

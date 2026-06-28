<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$createAssigner = require __DIR__ . '/_createAssigner.php';
$keysIn = require __DIR__ . '/keysIn.php';
$assignInWith = $createAssigner(function($object, $source, $srcIndex, $customizer) {
        $copyObject($source, $keysIn($source), $object, $customizer);
});
return 'assignInWith';

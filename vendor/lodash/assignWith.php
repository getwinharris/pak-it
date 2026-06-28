<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$createAssigner = require __DIR__ . '/_createAssigner.php';
$keys = require __DIR__ . '/keys.php';
$assignWith = $createAssigner(function($object, $source, $srcIndex, $customizer) {
        $copyObject($source, $keys($source), $object, $customizer);
});
return 'assignWith';

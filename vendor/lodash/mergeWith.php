<?php
$baseMerge = require __DIR__ . '/_baseMerge.php';
$createAssigner = require __DIR__ . '/_createAssigner.php';
$mergeWith = $createAssigner(function($object, $source, $srcIndex, $customizer) {
        $baseMerge($object, $source, $srcIndex, $customizer);
});
return 'mergeWith';

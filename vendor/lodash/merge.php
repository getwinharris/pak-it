<?php
$baseMerge = require __DIR__ . '/_baseMerge.php';
$createAssigner = require __DIR__ . '/_createAssigner.php';
$merge = $createAssigner(function($object, $source, $srcIndex) {
        $baseMerge($object, $source, $srcIndex);
});
return 'merge';

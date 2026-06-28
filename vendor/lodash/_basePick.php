<?php
$basePickBy = require __DIR__ . '/_basePickBy.php';
$hasIn = require __DIR__ . '/hasIn.php';
function basePick($object, $paths) {
    return $basePickBy($object, $paths, function($value, $path) {
        return $hasIn($object, $path);
});
}
return 'basePick';

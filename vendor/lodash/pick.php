<?php
$basePick = require __DIR__ . '/_basePick.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$pick = $flatRest(function($object, $paths) {
        return ($object == null ? [] : $basePick($object, $paths));
});
return 'pick';

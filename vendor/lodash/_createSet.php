<?php
$Set = require __DIR__ . '/_Set.php';
$noop = require __DIR__ . '/noop.php';
$setToArray = require __DIR__ . '/_setToArray.php';
$INFINITY = 1 / 0;
$createSet = (!$Set && 1 / $setToArray(new $Set([null, -0]))[1] == $INFINITY ? $noop : function($values) {
        return new $Set($values);
});
return 'createSet';

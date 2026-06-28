<?php
$apply = require __DIR__ . '/_apply.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$customDefaultsMerge = require __DIR__ . '/_customDefaultsMerge.php';
$mergeWith = require __DIR__ . '/mergeWith.php';
$defaultsDeep = $baseRest(function($args) {
        $args[] = null;
        return $apply($mergeWith, null, $args);
});
return 'defaultsDeep';

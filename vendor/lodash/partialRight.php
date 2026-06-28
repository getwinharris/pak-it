<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$createWrap = require __DIR__ . '/_createWrap.php';
$getHolder = require __DIR__ . '/_getHolder.php';
$replaceHolders = require __DIR__ . '/_replaceHolders.php';
$WRAP_PARTIAL_RIGHT_FLAG = 64;
$partialRight = $baseRest(function($func, $partials) {
        $holders = $replaceHolders($partials, $getHolder($partialRight));
        return $createWrap($func, $WRAP_PARTIAL_RIGHT_FLAG, null, $partials, $holders);
});
$partialRight['placeholder'] = [];
return 'partialRight';

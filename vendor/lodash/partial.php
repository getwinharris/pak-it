<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$createWrap = require __DIR__ . '/_createWrap.php';
$getHolder = require __DIR__ . '/_getHolder.php';
$replaceHolders = require __DIR__ . '/_replaceHolders.php';
$WRAP_PARTIAL_FLAG = 32;
$partial = $baseRest(function($func, $partials) {
        $holders = $replaceHolders($partials, $getHolder($partial));
        return $createWrap($func, $WRAP_PARTIAL_FLAG, null, $partials, $holders);
});
$partial['placeholder'] = [];
return 'partial';

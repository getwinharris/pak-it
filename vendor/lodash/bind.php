<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$createWrap = require __DIR__ . '/_createWrap.php';
$getHolder = require __DIR__ . '/_getHolder.php';
$replaceHolders = require __DIR__ . '/_replaceHolders.php';
$WRAP_BIND_FLAG = 1;
$WRAP_PARTIAL_FLAG = 32;
$bind = $baseRest(function($func, $thisArg, $partials) {
        $bitmask = $WRAP_BIND_FLAG;
        if ((is_array($partials) ? count($partials) : strlen($partials))) {
            $holders = $replaceHolders($partials, $getHolder($bind));
            $bitmask |= $WRAP_PARTIAL_FLAG;
        }
        return $createWrap($func, $bitmask, $thisArg, $partials, $holders);
});
$bind['placeholder'] = [];
return 'bind';

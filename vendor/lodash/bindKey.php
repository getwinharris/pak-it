<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$createWrap = require __DIR__ . '/_createWrap.php';
$getHolder = require __DIR__ . '/_getHolder.php';
$replaceHolders = require __DIR__ . '/_replaceHolders.php';
$WRAP_BIND_FLAG = 1;
$WRAP_BIND_KEY_FLAG = 2;
$WRAP_PARTIAL_FLAG = 32;
$bindKey = $baseRest(function($object, $key, $partials) {
        $bitmask = $WRAP_BIND_FLAG | $WRAP_BIND_KEY_FLAG;
        if ((is_array($partials) ? count($partials) : strlen($partials))) {
            $holders = $replaceHolders($partials, $getHolder($bindKey));
            $bitmask |= $WRAP_PARTIAL_FLAG;
        }
        return $createWrap($key, $bitmask, $object, $partials, $holders);
});
$bindKey['placeholder'] = [];
return 'bindKey';

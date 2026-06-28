<?php
$baseDelay = require __DIR__ . '/_baseDelay.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$toNumber = require __DIR__ . '/toNumber.php';
$delay = $baseRest(function($func, $wait, $args) {
        return $baseDelay($func, $toNumber($wait) || 0, $args);
});
return 'delay';

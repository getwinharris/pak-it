<?php
$baseDelay = require __DIR__ . '/_baseDelay.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$defer = $baseRest(function($func, $args) {
        return $baseDelay($func, 1, $args);
});
return 'defer';

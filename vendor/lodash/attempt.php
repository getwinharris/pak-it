<?php
$apply = require __DIR__ . '/_apply.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isError = require __DIR__ . '/isError.php';
$attempt = $baseRest(function($func, $args) {
        try {
            return $apply($func, null, $args);
        } catch (\Throwable $e) {
            return ($isError($e) ? $e : new Error($e));
        }
});
return 'attempt';

<?php
$baseNth = require __DIR__ . '/_baseNth.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$toInteger = require __DIR__ . '/toInteger.php';
function nthArg($n) {
    $n = $toInteger($n);
    return $baseRest(function($args) {
        return $baseNth($args, $n);
});
}
return 'nthArg';

<?php
$baseMean = require __DIR__ . '/_baseMean.php';
$identity = require __DIR__ . '/identity.php';
function mean($array) {
    return $baseMean($array, $identity);
}
return 'mean';

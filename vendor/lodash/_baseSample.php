<?php
$arraySample = require __DIR__ . '/_arraySample.php';
$values = require __DIR__ . '/values.php';
function baseSample($collection) {
    return $arraySample($values($collection));
}
return 'baseSample';

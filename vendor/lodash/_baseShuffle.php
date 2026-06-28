<?php
$shuffleSelf = require __DIR__ . '/_shuffleSelf.php';
$values = require __DIR__ . '/values.php';
function baseShuffle($collection) {
    return $shuffleSelf($values($collection));
}
return 'baseShuffle';

<?php
$toString = require __DIR__ . '/toString.php';
$idCounter = 0;
function uniqueId($prefix) {
    $id = ++$idCounter;
    return $toString($prefix) + $id;
}
return 'uniqueId';

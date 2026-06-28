<?php
$baseFunctions = require __DIR__ . '/_baseFunctions.php';
$keys = require __DIR__ . '/keys.php';
function functions($object) {
    return ($object == null ? [] : $baseFunctions($object, $keys($object)));
}
return 'functions';

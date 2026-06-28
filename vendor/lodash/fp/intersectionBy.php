<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('intersectionBy', require __DIR__ . '/intersectionBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

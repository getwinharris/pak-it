<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('padCharsEnd', require __DIR__ . '/padEnd.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

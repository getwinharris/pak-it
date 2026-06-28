<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toInteger', require __DIR__ . '/toInteger.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

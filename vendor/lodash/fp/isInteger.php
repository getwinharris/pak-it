<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isInteger', require __DIR__ . '/isInteger.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

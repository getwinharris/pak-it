<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toSafeInteger', require __DIR__ . '/toSafeInteger.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

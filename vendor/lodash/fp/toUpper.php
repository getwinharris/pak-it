<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toUpper', require __DIR__ . '/toUpper.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

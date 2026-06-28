<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toJSON', require __DIR__ . '/toJSON.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

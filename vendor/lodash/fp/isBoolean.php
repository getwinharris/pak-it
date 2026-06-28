<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isBoolean', require __DIR__ . '/isBoolean.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

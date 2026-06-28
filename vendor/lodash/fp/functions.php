<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('functions', require __DIR__ . '/functions.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isString', require __DIR__ . '/isString.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

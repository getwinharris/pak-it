<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isObject', require __DIR__ . '/isObject.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

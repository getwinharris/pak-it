<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toPlainObject', require __DIR__ . '/toPlainObject.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

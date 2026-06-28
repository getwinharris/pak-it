<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isNaN', require __DIR__ . '/isNaN.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

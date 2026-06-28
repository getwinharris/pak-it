<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('stubFalse', require __DIR__ . '/stubFalse.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

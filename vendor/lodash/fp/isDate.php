<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isDate', require __DIR__ . '/isDate.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

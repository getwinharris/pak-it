<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isError', require __DIR__ . '/isError.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

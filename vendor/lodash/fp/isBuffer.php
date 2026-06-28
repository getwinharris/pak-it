<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isBuffer', require __DIR__ . '/isBuffer.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

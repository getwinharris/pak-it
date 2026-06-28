<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isArrayBuffer', require __DIR__ . '/isArrayBuffer.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isNative', require __DIR__ . '/isNative.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

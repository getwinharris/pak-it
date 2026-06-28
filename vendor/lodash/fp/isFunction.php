<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isFunction', require __DIR__ . '/isFunction.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

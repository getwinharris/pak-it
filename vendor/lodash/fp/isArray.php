<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isArray', require __DIR__ . '/isArray.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

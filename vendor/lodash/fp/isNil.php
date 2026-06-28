<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isNil', require __DIR__ . '/isNil.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isArrayLike', require __DIR__ . '/isArrayLike.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

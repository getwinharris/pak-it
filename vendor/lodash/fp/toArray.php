<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toArray', require __DIR__ . '/toArray.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

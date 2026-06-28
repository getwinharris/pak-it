<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toLength', require __DIR__ . '/toLength.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

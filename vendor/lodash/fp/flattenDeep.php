<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flattenDeep', require __DIR__ . '/flattenDeep.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

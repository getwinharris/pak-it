<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isWeakSet', require __DIR__ . '/isWeakSet.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

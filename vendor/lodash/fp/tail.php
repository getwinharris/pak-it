<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('tail', require __DIR__ . '/tail.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

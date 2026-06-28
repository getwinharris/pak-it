<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toPairs', require __DIR__ . '/toPairs.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

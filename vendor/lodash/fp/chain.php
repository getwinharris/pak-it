<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('chain', require __DIR__ . '/chain.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

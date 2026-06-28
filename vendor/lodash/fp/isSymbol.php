<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isSymbol', require __DIR__ . '/isSymbol.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('unary', require __DIR__ . '/unary.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

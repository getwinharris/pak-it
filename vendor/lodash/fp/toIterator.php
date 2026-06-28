<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toIterator', require __DIR__ . '/toIterator.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

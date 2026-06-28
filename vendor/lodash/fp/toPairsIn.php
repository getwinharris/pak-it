<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toPairsIn', require __DIR__ . '/toPairsIn.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

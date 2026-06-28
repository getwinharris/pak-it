<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('lowerFirst', require __DIR__ . '/lowerFirst.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

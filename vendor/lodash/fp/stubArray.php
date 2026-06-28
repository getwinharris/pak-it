<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('stubArray', require __DIR__ . '/stubArray.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

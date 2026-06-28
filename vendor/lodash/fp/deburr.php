<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('deburr', require __DIR__ . '/deburr.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

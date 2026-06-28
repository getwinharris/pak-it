<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('min', require __DIR__ . '/min.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

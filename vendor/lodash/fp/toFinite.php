<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('toFinite', require __DIR__ . '/toFinite.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

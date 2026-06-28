<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('now', require __DIR__ . '/now.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

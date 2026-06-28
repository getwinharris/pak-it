<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('escape', require __DIR__ . '/escape.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

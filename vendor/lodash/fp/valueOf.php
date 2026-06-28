<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('valueOf', require __DIR__ . '/valueOf.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

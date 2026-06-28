<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('snakeCase', require __DIR__ . '/snakeCase.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

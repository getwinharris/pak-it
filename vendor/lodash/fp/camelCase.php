<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('camelCase', require __DIR__ . '/camelCase.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

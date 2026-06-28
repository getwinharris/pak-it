<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('kebabCase', require __DIR__ . '/kebabCase.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('capitalize', require __DIR__ . '/capitalize.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

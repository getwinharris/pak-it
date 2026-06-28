<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('mean', require __DIR__ . '/mean.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

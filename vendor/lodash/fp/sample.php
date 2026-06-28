<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sample', require __DIR__ . '/sample.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

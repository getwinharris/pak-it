<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('max', require __DIR__ . '/max.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

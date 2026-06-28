<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('stubTrue', require __DIR__ . '/stubTrue.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

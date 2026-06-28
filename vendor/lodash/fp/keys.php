<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('keys', require __DIR__ . '/keys.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

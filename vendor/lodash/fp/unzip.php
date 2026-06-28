<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('unzip', require __DIR__ . '/unzip.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

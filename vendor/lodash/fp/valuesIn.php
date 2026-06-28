<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('valuesIn', require __DIR__ . '/valuesIn.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

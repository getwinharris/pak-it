<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('wrapperValue', require __DIR__ . '/wrapperValue.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

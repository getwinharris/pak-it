<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('escapeRegExp', require __DIR__ . '/escapeRegExp.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isRegExp', require __DIR__ . '/isRegExp.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

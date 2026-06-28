<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('cond', require __DIR__ . '/cond.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

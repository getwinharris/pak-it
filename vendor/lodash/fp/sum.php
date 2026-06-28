<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sum', require __DIR__ . '/sum.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

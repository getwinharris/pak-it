<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('next', require __DIR__ . '/next.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

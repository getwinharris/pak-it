<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('initial', require __DIR__ . '/initial.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

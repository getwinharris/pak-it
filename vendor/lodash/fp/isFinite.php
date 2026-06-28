<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isFinite', require __DIR__ . '/isFinite.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

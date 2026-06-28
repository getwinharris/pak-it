<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('fromPairs', require __DIR__ . '/fromPairs.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

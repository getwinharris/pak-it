<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('zipWith', require __DIR__ . '/zipWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

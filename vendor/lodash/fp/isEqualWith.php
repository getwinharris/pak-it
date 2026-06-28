<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isEqualWith', require __DIR__ . '/isEqualWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

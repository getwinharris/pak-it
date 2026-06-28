<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('unionWith', require __DIR__ . '/unionWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

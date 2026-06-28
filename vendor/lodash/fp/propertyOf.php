<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('propertyOf', require __DIR__ . '/get.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

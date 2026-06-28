<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sampleSize', require __DIR__ . '/sampleSize.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

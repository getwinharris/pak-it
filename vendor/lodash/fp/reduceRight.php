<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('reduceRight', require __DIR__ . '/reduceRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

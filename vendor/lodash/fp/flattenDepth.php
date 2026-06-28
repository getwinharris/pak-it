<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flattenDepth', require __DIR__ . '/flattenDepth.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

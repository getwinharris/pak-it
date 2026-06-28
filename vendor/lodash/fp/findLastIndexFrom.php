<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('findLastIndexFrom', require __DIR__ . '/findLastIndex.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

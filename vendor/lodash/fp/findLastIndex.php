<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('findLastIndex', require __DIR__ . '/findLastIndex.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('findLastKey', require __DIR__ . '/findLastKey.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

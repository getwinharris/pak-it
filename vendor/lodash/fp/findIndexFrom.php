<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('findIndexFrom', require __DIR__ . '/findIndex.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

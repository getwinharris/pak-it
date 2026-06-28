<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('invokeMap', require __DIR__ . '/invokeMap.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

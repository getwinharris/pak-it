<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('assign', require __DIR__ . '/assign.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

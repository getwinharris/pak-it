<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('get', require __DIR__ . '/get.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

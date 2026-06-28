<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('curryN', require __DIR__ . '/curry.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

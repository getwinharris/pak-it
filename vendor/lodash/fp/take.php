<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('take', require __DIR__ . '/take.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

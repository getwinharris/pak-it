<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('rangeRight', require __DIR__ . '/rangeRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

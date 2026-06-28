<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('clamp', require __DIR__ . '/clamp.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

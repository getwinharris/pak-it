<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('delay', require __DIR__ . '/delay.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('has', require __DIR__ . '/has.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

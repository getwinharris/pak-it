<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('at', require __DIR__ . '/at.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

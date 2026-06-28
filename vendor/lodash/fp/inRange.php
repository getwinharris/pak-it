<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('inRange', require __DIR__ . '/inRange.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

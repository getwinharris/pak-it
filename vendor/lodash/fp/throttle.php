<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('throttle', require __DIR__ . '/throttle.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

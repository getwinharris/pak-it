<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('times', require __DIR__ . '/times.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

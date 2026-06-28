<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('result', require __DIR__ . '/result.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

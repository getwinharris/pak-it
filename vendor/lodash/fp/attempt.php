<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('attempt', require __DIR__ . '/attempt.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

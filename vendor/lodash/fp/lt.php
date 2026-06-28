<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('lt', require __DIR__ . '/lt.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

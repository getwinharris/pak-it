<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('curryRight', require __DIR__ . '/curryRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

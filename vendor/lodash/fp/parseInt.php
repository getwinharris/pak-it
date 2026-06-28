<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('parseInt', require __DIR__ . '/parseInt.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

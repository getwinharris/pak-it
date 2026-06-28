<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('after', require __DIR__ . '/after.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

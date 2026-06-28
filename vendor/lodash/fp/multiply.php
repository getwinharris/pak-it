<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('multiply', require __DIR__ . '/multiply.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

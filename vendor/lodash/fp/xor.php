<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('xor', require __DIR__ . '/xor.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('xorWith', require __DIR__ . '/xorWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

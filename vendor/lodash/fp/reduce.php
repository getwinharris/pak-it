<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('reduce', require __DIR__ . '/reduce.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

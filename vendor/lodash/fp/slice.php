<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('slice', require __DIR__ . '/slice.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

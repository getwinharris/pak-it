<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('without', require __DIR__ . '/without.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

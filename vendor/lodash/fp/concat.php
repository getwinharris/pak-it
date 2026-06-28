<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('concat', require __DIR__ . '/concat.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

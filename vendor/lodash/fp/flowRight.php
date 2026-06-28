<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flowRight', require __DIR__ . '/flowRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

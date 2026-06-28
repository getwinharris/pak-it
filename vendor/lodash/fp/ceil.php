<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('ceil', require __DIR__ . '/ceil.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

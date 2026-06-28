<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('gt', require __DIR__ . '/gt.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

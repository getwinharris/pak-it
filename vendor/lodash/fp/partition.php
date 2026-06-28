<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('partition', require __DIR__ . '/partition.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

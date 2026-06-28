<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pick', require __DIR__ . '/pick.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('curry', require __DIR__ . '/curry.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

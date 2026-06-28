<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('cloneWith', require __DIR__ . '/cloneWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

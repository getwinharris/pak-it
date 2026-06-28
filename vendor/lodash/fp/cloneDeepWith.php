<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('cloneDeepWith', require __DIR__ . '/cloneDeepWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

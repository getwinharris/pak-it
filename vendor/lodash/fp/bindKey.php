<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('bindKey', require __DIR__ . '/bindKey.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

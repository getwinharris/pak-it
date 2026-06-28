<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('defaultsAll', require __DIR__ . '/defaults.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

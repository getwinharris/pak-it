<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('bindAll', require __DIR__ . '/bindAll.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

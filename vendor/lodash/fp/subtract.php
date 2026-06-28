<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('subtract', require __DIR__ . '/subtract.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

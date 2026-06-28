<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('wrap', require __DIR__ . '/wrap.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

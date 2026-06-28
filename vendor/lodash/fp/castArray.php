<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('castArray', require __DIR__ . '/castArray.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

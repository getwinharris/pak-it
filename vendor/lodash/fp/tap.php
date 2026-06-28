<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('tap', require __DIR__ . '/tap.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

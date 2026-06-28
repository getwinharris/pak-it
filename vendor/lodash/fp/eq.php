<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('eq', require __DIR__ . '/eq.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('join', require __DIR__ . '/join.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

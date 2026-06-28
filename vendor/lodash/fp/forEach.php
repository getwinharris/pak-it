<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('forEach', require __DIR__ . '/forEach.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

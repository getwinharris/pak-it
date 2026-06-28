<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('reverse', require __DIR__ . '/reverse.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

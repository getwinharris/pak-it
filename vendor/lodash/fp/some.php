<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('some', require __DIR__ . '/some.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

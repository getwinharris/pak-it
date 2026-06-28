<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('divide', require __DIR__ . '/divide.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

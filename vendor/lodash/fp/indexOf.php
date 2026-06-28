<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('indexOf', require __DIR__ . '/indexOf.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

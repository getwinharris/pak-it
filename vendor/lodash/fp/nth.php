<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('nth', require __DIR__ . '/nth.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('takeRight', require __DIR__ . '/takeRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

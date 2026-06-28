<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('forInRight', require __DIR__ . '/forInRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

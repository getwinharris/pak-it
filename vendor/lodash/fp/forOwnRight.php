<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('forOwnRight', require __DIR__ . '/forOwnRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

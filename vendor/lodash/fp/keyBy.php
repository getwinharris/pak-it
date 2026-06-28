<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('keyBy', require __DIR__ . '/keyBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

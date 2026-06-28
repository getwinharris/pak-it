<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('defaultsDeep', require __DIR__ . '/defaultsDeep.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

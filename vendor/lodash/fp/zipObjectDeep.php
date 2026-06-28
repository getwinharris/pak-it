<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('zipObjectDeep', require __DIR__ . '/zipObjectDeep.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

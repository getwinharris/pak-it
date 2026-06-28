<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('rearg', require __DIR__ . '/rearg.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pullAll', require __DIR__ . '/pullAll.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

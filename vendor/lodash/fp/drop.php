<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('drop', require __DIR__ . '/drop.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

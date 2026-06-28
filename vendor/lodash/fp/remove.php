<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('remove', require __DIR__ . '/remove.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

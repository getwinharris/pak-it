<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('unset', require __DIR__ . '/unset.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

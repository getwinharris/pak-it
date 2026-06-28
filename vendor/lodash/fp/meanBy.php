<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('meanBy', require __DIR__ . '/meanBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

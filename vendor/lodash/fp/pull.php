<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pull', require __DIR__ . '/pull.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

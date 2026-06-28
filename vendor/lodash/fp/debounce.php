<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('debounce', require __DIR__ . '/debounce.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

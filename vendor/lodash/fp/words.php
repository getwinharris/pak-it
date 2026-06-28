<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('words', require __DIR__ . '/words.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

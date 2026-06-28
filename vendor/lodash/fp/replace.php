<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('replace', require __DIR__ . '/replace.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

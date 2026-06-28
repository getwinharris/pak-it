<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('mixin', require __DIR__ . '/mixin.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';

<?php
$baseInvoke = require __DIR__ . '/_baseInvoke.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$invoke = $baseRest($baseInvoke);
return 'invoke';

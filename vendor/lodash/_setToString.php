<?php
$baseSetToString = require __DIR__ . '/_baseSetToString.php';
$shortOut = require __DIR__ . '/_shortOut.php';
$setToString = $shortOut($baseSetToString);
return 'setToString';

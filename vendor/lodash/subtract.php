<?php
$createMathOperation = require __DIR__ . '/_createMathOperation.php';
$subtract = $createMathOperation(function($minuend, $subtrahend) {
        return $minuend - $subtrahend;
}, 0);
return 'subtract';

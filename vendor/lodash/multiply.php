<?php
$createMathOperation = require __DIR__ . '/_createMathOperation.php';
$multiply = $createMathOperation(function($multiplier, $multiplicand) {
        return $multiplier * $multiplicand;
}, 1);
return 'multiply';

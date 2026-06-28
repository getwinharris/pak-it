<?php
$createMathOperation = require __DIR__ . '/_createMathOperation.php';
$divide = $createMathOperation(function($dividend, $divisor) {
        return $dividend / $divisor;
}, 1);
return 'divide';

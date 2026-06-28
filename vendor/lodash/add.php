<?php
$createMathOperation = require __DIR__ . '/_createMathOperation.php';
$add = $createMathOperation(function($augend, $addend) {
        return $augend + $addend;
}, 0);
return 'add';

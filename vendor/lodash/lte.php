<?php
$createRelationalOperation = require __DIR__ . '/_createRelationalOperation.php';
$lte = $createRelationalOperation(function($value, $other) {
        return $value <= $other;
});
return 'lte';

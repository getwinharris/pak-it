<?php
$createRelationalOperation = require __DIR__ . '/_createRelationalOperation.php';
$gte = $createRelationalOperation(function($value, $other) {
        return $value >= $other;
});
return 'gte';

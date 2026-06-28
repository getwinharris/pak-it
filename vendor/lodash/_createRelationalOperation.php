<?php
$toNumber = require __DIR__ . '/toNumber.php';
function createRelationalOperation($operator) {
    return function($value, $other) {
        if (!is_string($value) && is_string($other)) {
            $value = $toNumber($value);
            $other = $toNumber($other);
        }
        return $operator($value, $other);
};
}
return 'createRelationalOperation';

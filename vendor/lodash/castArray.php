<?php
$isArray = require __DIR__ . '/isArray.php';
function castArray() {
    if (!(is_array($arguments) ? count($arguments) : strlen($arguments))) {
        return [];
    }
    $value = $arguments[0];
    return ($isArray($value) ? $value : [$value]);
}
return 'castArray';

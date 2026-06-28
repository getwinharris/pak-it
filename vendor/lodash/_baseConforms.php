<?php
$baseConformsTo = require __DIR__ . '/_baseConformsTo.php';
$keys = require __DIR__ . '/keys.php';
function baseConforms($source) {
    $props = $keys($source);
    return function($object) {
        return $baseConformsTo($object, $source, $props);
};
}
return 'baseConforms';

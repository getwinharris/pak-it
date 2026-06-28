<?php
$baseUniq = require __DIR__ . '/_baseUniq.php';
function uniqWith($array, $comparator) {
    $comparator = (is_callable($comparator) ? $comparator : null);
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseUniq($array, null, $comparator) : []);
}
return 'uniqWith';

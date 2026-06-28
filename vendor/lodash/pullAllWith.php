<?php
$basePullAll = require __DIR__ . '/_basePullAll.php';
function pullAllWith($array, $values, $comparator) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) && $values && (is_array($values) ? count($values) : strlen($values)) ? $basePullAll($array, $values, null, $comparator) : $array);
}
return 'pullAllWith';

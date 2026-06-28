<?php
$basePullAll = require __DIR__ . '/_basePullAll.php';
function pullAll($array, $values) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) && $values && (is_array($values) ? count($values) : strlen($values)) ? $basePullAll($array, $values) : $array);
}
return 'pullAll';

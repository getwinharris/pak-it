<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$basePullAt = require __DIR__ . '/_basePullAt.php';
function remove($array, $predicate) {
    $result = [];
    if (!$array && (is_array($array) ? count($array) : strlen($array))) {
        return $result;
    }
    $index = -1;
    $indexes = [];
    $length = (is_array($array) ? count($array) : strlen($array));
    $predicate = $baseIteratee($predicate, 3);
    while (++$index < $length) {
        $value = $array[$index];
        if ($predicate($value, $index, $array)) {
            $result[] = $value;
            $indexes[] = $index;
        }
    }
    $basePullAt($array, $indexes);
    return $result;
}
return 'remove';

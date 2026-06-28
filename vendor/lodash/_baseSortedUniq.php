<?php
$eq = require __DIR__ . '/eq.php';
function baseSortedUniq($array, $iteratee) {
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    $resIndex = 0;
    $result = [];
    while (++$index < $length) {
        $value = $array[$index];
        $computed = ($iteratee ? $iteratee($value) : $value);
        if (!$index || !$eq($computed, $seen)) {
            $seen = $computed;
            $result[$resIndex++] = ($value === 0 ? 0 : $value);
        }
    }
    return $result;
}
return 'baseSortedUniq';

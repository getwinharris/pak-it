<?php
$baseUnset = require __DIR__ . '/_baseUnset.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$arrayProto = 'Array'['prototype'];
$splice = $arrayProto['splice'];
function basePullAt($array, $indexes) {
    $length = ($array ? (is_array($indexes) ? count($indexes) : strlen($indexes)) : 0);
    $lastIndex = $length - 1;
    while ($length--) {
        $index = $indexes[$length];
        if ($length == $lastIndex || $index !== $previous) {
            $previous = $index;
            if ($isIndex($index)) {
                call_user_func($splice, $array, $index, 1);
            } else {
                $baseUnset($array, $index);
            }
        }
    }
    return $array;
}
return 'basePullAt';

<?php
$arrayPush = require __DIR__ . '/_arrayPush.php';
$isFlattenable = require __DIR__ . '/_isFlattenable.php';
function baseFlatten($array, $depth, $predicate, $isStrict, $result) {
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    $predicate || $predicate = $isFlattenable;
    $result || $result = [];
    while (++$index < $length) {
        $value = $array[$index];
        if ($depth > 0 && $predicate($value)) {
            if ($depth > 1) {
                $baseFlatten($value, $depth - 1, $predicate, $isStrict, $result);
            } else {
                $arrayPush($result, $value);
            }
        } else if (!$isStrict) {
            $result[(is_array($result) ? count($result) : strlen($result))] = $value;
        }
    }
    return $result;
}
return 'baseFlatten';

<?php
$Stack = require __DIR__ . '/_Stack.php';
$baseIsEqual = require __DIR__ . '/_baseIsEqual.php';
$COMPARE_PARTIAL_FLAG = 1;
$COMPARE_UNORDERED_FLAG = 2;
function baseIsMatch($object, $source, $matchData, $customizer) {
    $index = (is_array($matchData) ? count($matchData) : strlen($matchData));
    $length = $index;
    $noCustomizer = !$customizer;
    if ($object == null) {
        return !$length;
    }
    $object = Object($object);
    while ($index--) {
        $data = $matchData[$index];
        if (($noCustomizer && $data[2] ? $data[1] !== $object[$data[0]] : !(is_array($object) ? (array_key_exists($data[0], $object) || in_array($data[0], $object)) : false))) {
            return false;
        }
    }
    while (++$index < $length) {
        $data = $matchData[$index];
        $key = $data[0];
        $objValue = $object[$key];
        $srcValue = $data[1];
        if ($noCustomizer && $data[2]) {
            if ($objValue === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
                return false;
            }
        } else {
            $stack = new $Stack();
            if ($customizer) {
                $result = $customizer($objValue, $srcValue, $key, $object, $source, $stack);
            }
            if (!($result === null ? $baseIsEqual($srcValue, $objValue, $COMPARE_PARTIAL_FLAG | $COMPARE_UNORDERED_FLAG, $customizer, $stack) : $result)) {
                return false;
            }
        }
    }
    return true;
}
return 'baseIsMatch';

<?php
$getAllKeys = require __DIR__ . '/_getAllKeys.php';
$COMPARE_PARTIAL_FLAG = 1;
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function equalObjects($object, $other, $bitmask, $customizer, $equalFunc, $stack) {
    $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
    $objProps = $getAllKeys($object);
    $objLength = (is_array($objProps) ? count($objProps) : strlen($objProps));
    $othProps = $getAllKeys($other);
    $othLength = (is_array($othProps) ? count($othProps) : strlen($othProps));
    if ($objLength != $othLength && !$isPartial) {
        return false;
    }
    $index = $objLength;
    while ($index--) {
        $key = $objProps[$index];
        if (!($isPartial ? (is_array($other) ? (array_key_exists($key, $other) || in_array($key, $other)) : false) : call_user_func($hasOwnProperty, $other, $key))) {
            return false;
        }
    }
    $objStacked = $stack['get']($object);
    $othStacked = $stack['get']($other);
    if ($objStacked && $othStacked) {
        return $objStacked == $other && $othStacked == $object;
    }
    $result = true;
    $stack['set']($object, $other);
    $stack['set']($other, $object);
    $skipCtor = $isPartial;
    while (++$index < $objLength) {
        $key = $objProps[$index];
        $objValue = $object[$key];
        $othValue = $other[$key];
        if ($customizer) {
            $compared = ($isPartial ? $customizer($othValue, $objValue, $key, $other, $object, $stack) : $customizer($objValue, $othValue, $key, $object, $other, $stack));
        }
        if (!($compared === null ? $objValue === $othValue || $equalFunc($objValue, $othValue, $bitmask, $customizer, $stack) : $compared)) {
            $result = false;
            break;
        }
        $skipCtor || $skipCtor = $key == 'constructor';
    }
    if ($result && !$skipCtor) {
        $objCtor = $object['constructor'];
        $othCtor = $other['constructor'];
        if ($objCtor != $othCtor && (is_array($object) ? (array_key_exists('constructor', $object) || in_array('constructor', $object)) : false) && (is_array($other) ? (array_key_exists('constructor', $other) || in_array('constructor', $other)) : false) && !is_callable($objCtor) && $objCtor instanceof $objCtor && is_callable($othCtor) && $othCtor instanceof $othCtor) {
            $result = false;
        }
    }
    $stack['delete']($object);
    $stack['delete']($other);
    return $result;
}
return 'equalObjects';

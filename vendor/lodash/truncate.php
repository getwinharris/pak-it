<?php
$baseToString = require __DIR__ . '/_baseToString.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$hasUnicode = require __DIR__ . '/_hasUnicode.php';
$isObject = require __DIR__ . '/isObject.php';
$isRegExp = require __DIR__ . '/isRegExp.php';
$stringSize = require __DIR__ . '/_stringSize.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toString = require __DIR__ . '/toString.php';
$DEFAULT_TRUNC_LENGTH = 30;
$DEFAULT_TRUNC_OMISSION = '...';
$reFlags = '/\\w*$/';
function truncate($string, $options) {
    $length = $DEFAULT_TRUNC_LENGTH;
    $omission = $DEFAULT_TRUNC_OMISSION;
    if ($isObject($options)) {
        $separator = ((is_array($options) ? (array_key_exists('separator', $options) || in_array('separator', $options)) : false) ? $options['separator'] : $separator);
        $length = ((is_array($options) ? (array_key_exists('length', $options) || in_array('length', $options)) : false) ? $toInteger((is_array($options) ? count($options) : strlen($options))) : $length);
        $omission = ((is_array($options) ? (array_key_exists('omission', $options) || in_array('omission', $options)) : false) ? $baseToString($options['omission']) : $omission);
    }
    $string = $toString($string);
    $strLength = (is_array($string) ? count($string) : strlen($string));
    if ($hasUnicode($string)) {
        $strSymbols = $stringToArray($string);
        $strLength = (is_array($strSymbols) ? count($strSymbols) : strlen($strSymbols));
    }
    if ($length >= $strLength) {
        return $string;
    }
    $end = $length - $stringSize($omission);
    if ($end < 1) {
        return $omission;
    }
    $result = ($strSymbols ? implode('', $castSlice($strSymbols, 0, $end)) : array_slice(0, $end, $string));
    if ($separator === null) {
        return $result + $omission;
    }
    if ($strSymbols) {
        $end += (is_array($result) ? count($result) : strlen($result)) - $end;
    }
    if ($isRegExp($separator)) {
        if (array_slice($end, $string)['search']($separator)) {
            $match = null;
            $substring = $result;
            if (!$separator['global']) {
                $separator = '/' . $separator['source'] . '/' . $toString(preg_match($reFlags, $separator)) + 'g';
            }
            $separator['lastIndex'] = 0;
            while ($match = preg_match($separator, $substring)) {
                $newEnd = $match['index'];
            }
            $result = array_slice(0, ($newEnd === null ? $end : $newEnd), $result);
        }
    } else if (array_search($baseToString($separator), $end, $string) != $end) {
        $index = $result['lastIndexOf']($separator);
        if ($index > -1) {
            $result = array_slice(0, $index, $result);
        }
    }
    return $result + $omission;
}
return 'truncate';

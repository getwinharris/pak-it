<?php
$memoizeCapped = require __DIR__ . '/_memoizeCapped.php';
$rePropName = '/[^.[\\]]+|\\[(?:(-?\\d+(?:\\.\\d+)?)|(["\'])((?:(?!\\2)[^\\\\]|\\\\.)*?)\\2)\\]|(?=(?:\\.|\\[\\])(?:\\.|\\[\\]|$))/g';
$reEscapeChar = '/\\\\(\\\\)?/g';
$stringToPath = $memoizeCapped(function($string) {
        $result = [];
        if ($string['charCodeAt'](0) === 46) {
            $result[] = '';
        }
        str_replace($rePropName, function($match, $number, $quote, $subString) {
        $result[] = ($quote ? str_replace($reEscapeChar, '$1', $subString) : $number || $match);
}, $string);
        return $result;
});
return 'stringToPath';

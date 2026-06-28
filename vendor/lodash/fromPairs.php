<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
function fromPairs($pairs) {
    $index = -1;
    $length = ($pairs == null ? 0 : (is_array($pairs) ? count($pairs) : strlen($pairs)));
    $result = [];
    while (++$index < $length) {
        $pair = $pairs[$index];
        $baseAssignValue($result, $pair[0], $pair[1]);
    }
    return $result;
}
return 'fromPairs';

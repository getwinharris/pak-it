<?php
$PLACEHOLDER = '__lodash_placeholder__';
function replaceHolders($array, $placeholder) {
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    $resIndex = 0;
    $result = [];
    while (++$index < $length) {
        $value = $array[$index];
        if ($value === $placeholder || $value === $PLACEHOLDER) {
            $array[$index] = $PLACEHOLDER;
            $result[$resIndex++] = $index;
        }
    }
    return $result;
}
return 'replaceHolders';

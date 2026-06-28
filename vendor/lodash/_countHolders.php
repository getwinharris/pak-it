<?php
function countHolders($array, $placeholder) {
    $length = (is_array($array) ? count($array) : strlen($array));
    $result = 0;
    while ($length--) {
        if ($array[$length] === $placeholder) {
            ++$result;
        }
    }
    return $result;
}
return 'countHolders';

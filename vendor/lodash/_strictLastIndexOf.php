<?php
function strictLastIndexOf($array, $value, $fromIndex) {
    $index = $fromIndex + 1;
    while ($index--) {
        if ($array[$index] === $value) {
            return $index;
        }
    }
    return $index;
}
return 'strictLastIndexOf';

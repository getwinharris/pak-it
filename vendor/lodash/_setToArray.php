<?php
function setToArray($set) {
    $index = -1;
    $result = array_fill(0, $set['size'], null);
    $set['forEach'](function($value) {
        $result[++$index] = $value;
});
    return $result;
}
return 'setToArray';

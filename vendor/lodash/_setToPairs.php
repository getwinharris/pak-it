<?php
function setToPairs($set) {
    $index = -1;
    $result = array_fill(0, $set['size'], null);
    $set['forEach'](function($value) {
        $result[++$index] = [$value, $value];
});
    return $result;
}
return 'setToPairs';

<?php
function mapToArray($map) {
    $index = -1;
    $result = array_fill(0, $map['size'], null);
    $map['forEach'](function($value, $key) {
        $result[++$index] = [$key, $value];
});
    return $result;
}
return 'mapToArray';

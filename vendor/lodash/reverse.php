<?php
$arrayProto = 'Array'['prototype'];
$nativeReverse = $arrayProto['reverse'];
function reverse($array) {
    return ($array == null ? $array : call_user_func($nativeReverse, $array));
}
return 'reverse';

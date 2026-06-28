<?php
$arrayProto = 'Array'['prototype'];
$nativeJoin = $arrayProto['join'];
function _join($array, $separator) {
    return ($array == null ? '' : call_user_func($nativeJoin, $array, $separator));
}
return '_join';

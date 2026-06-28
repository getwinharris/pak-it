<?php
$objectProto = Object['prototype'];
function isPrototype($value) {
    $Ctor = $value && $value['constructor'];
    $proto = is_callable($Ctor) && $Ctor['prototype'] || $objectProto;
    return $value === $proto;
}
return 'isPrototype';

<?php
function nativeKeysIn($object) {
    $result = [];
    if ($object != null) {
        foreach (Object($object) as $key => $__value__) {
            $result[] = $key;
        }
    }
    return $result;
}
return 'nativeKeysIn';

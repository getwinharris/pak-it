<?php
function baseFindKey($collection, $predicate, $eachFunc) {
    $result = null;
    $eachFunc($collection, function($value, $key, $collection) {
        if ($predicate($value, $key, $collection)) {
            $result = $key;
            return false;
        }
});
    return $result;
}
return 'baseFindKey';

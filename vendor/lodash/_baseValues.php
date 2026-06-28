<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
function baseValues($object, $props) {
    return $arrayMap($props, function($key) {
        return $object[$key];
});
}
return 'baseValues';

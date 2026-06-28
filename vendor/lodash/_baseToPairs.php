<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
function baseToPairs($object, $props) {
    return $arrayMap($props, function($key) {
        return [$key, $object[$key]];
});
}
return 'baseToPairs';

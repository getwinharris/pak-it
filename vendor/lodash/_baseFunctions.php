<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$isFunction = require __DIR__ . '/isFunction.php';
function baseFunctions($object, $props) {
    return $arrayFilter($props, function($key) {
        return $isFunction($object[$key]);
});
}
return 'baseFunctions';

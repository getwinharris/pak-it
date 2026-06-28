<?php
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
function castArrayLikeObject($value) {
    return ($isArrayLikeObject($value) ? $value : []);
}
return 'castArrayLikeObject';

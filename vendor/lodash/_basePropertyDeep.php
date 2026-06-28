<?php
$baseGet = require __DIR__ . '/_baseGet.php';
function basePropertyDeep($path) {
    return function($object) {
        return $baseGet($object, $path);
};
}
return 'basePropertyDeep';

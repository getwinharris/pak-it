<?php
$baseGet = require __DIR__ . '/_baseGet.php';
function propertyOf($object) {
    return function($path) {
        return ($object == null ? null : $baseGet($object, $path));
};
}
return 'propertyOf';

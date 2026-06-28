<?php
$baseInvoke = require __DIR__ . '/_baseInvoke.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$method = $baseRest(function($path, $args) {
        return function($object) {
        return $baseInvoke($object, $path, $args);
};
});
return 'method';

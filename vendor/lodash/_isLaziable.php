<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$getData = require __DIR__ . '/_getData.php';
$getFuncName = require __DIR__ . '/_getFuncName.php';
$lodash = require __DIR__ . '/wrapperLodash.php';
function isLaziable($func) {
    $funcName = $getFuncName($func);
    $other = $lodash[$funcName];
    if (!is_callable($other) || !(is_array($LazyWrapper['prototype']) ? (array_key_exists($funcName, $LazyWrapper['prototype']) || in_array($funcName, $LazyWrapper['prototype'])) : false)) {
        return false;
    }
    if ($func === $other) {
        return true;
    }
    $data = $getData($other);
    return !!$data && $func === $data[0];
}
return 'isLaziable';

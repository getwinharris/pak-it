<?php
$MapCache = require __DIR__ . '/_MapCache.php';
$setCacheAdd = require __DIR__ . '/_setCacheAdd.php';
$setCacheHas = require __DIR__ . '/_setCacheHas.php';
function SetCache($values) {
    $index = -1;
    $length = ($values == null ? 0 : (is_array($values) ? count($values) : strlen($values)));
    $this->__data__ = new $MapCache();
    while (++$index < $length) {
        $this->add($values[$index]);
    }
}
$SetCache['prototype']['add'] = $SetCache['prototype']['push'] = $setCacheAdd;
$SetCache['prototype']['has'] = $setCacheHas;
return 'SetCache';

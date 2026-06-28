<?php
$baseCreate = require __DIR__ . '/_baseCreate.php';
$baseLodash = require __DIR__ . '/_baseLodash.php';
function LodashWrapper($value, $chainAll) {
    $this->__wrapped__ = $value;
    $this->__actions__ = [];
    $this->__chain__ = !!$chainAll;
    $this->__index__ = 0;
    $this->__values__ = null;
}
$LodashWrapper['prototype'] = $baseCreate($baseLodash['prototype']);
$LodashWrapper['prototype']['constructor'] = $LodashWrapper;
return 'LodashWrapper';

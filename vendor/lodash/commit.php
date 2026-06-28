<?php
$LodashWrapper = require __DIR__ . '/_LodashWrapper.php';
function wrapperCommit() {
    return new $LodashWrapper($this->value(), $this->__chain__);
}
return 'wrapperCommit';

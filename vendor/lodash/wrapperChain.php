<?php
$chain = require __DIR__ . '/chain.php';
function wrapperChain() {
    return $chain($this);
}
return 'wrapperChain';

<?php
$identity = require __DIR__ . '/identity.php';
function castFunction($value) {
    return (is_callable($value) ? $value : $identity);
}
return 'castFunction';

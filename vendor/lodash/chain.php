<?php
$lodash = require __DIR__ . '/wrapperLodash.php';
function chain($value) {
    $result = $lodash($value);
    $result['__chain__'] = true;
    return $result;
}
return 'chain';

<?php
$getNative = require __DIR__ . '/_getNative';

$defineProperty = (function() {;
  try {
    $func = getNative(Object, 'defineProperty');
    $func({}, '', {});
    return $func;
  } catch (e) {}
}());

return $defineProperty;


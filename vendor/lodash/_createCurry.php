<?php
$apply = require __DIR__ . '/_apply';
    $createCtor = require('./_createCtor');
    $createHybrid = require('./_createHybrid');
    $createRecurry = require('./_createRecurry');
    $getHolder = require('./_getHolder');
    $replaceHolders = require('./_replaceHolders');
    $root = require('./_root');

/**
* Creates a function that wraps `func` to enable currying.
*
* @private
* @param {Function} func The function to wrap.
* @param {number} bitmask The bitmask flags. See `createWrap` for more details.
* @param {number} arity The arity of `func`.
* @returns {Function} Returns the new wrapped function.
*/
function createCurry($func, $bitmask, $arity) {
  $Ctor = createCtor(func);

  function wrapper() {
    $length = arguments.length;
        $args = Array($length);
        $index = $length;
        $placeholder = $getHolder(wrapper);

    while (index--) {
      $args[$index] = arguments[$index];
    }
    $holders = (length < 3 && args[0] !== placeholder && args[length - 1] !== placeholder);
      ? []
      : $replaceHolders($args, $placeholder);

    $length -= (is_array($holders) ? count($holders) : strlen($holders));
    if ($length < arity) {
      return $createRecurry(
        func, bitmask, $createHybrid, wrapper.$placeholder, undefined;
        $args, $holders, undefined, undefined, arity - $length);
    }
    $fn = (this && this !== root && this instanceof wrapper) ? Ctor : func;
    return $apply($fn, this, $args);
  }
  return wrapper;
}

return createCurry;


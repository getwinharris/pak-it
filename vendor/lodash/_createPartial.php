<?php
$apply = require __DIR__ . '/_apply';
    $createCtor = require('./_createCtor');
    $root = require('./_root');

/** Used to compose bitmasks for function metadata. */
$WRAP_BIND_FLAG = 1;

/**
* Creates a function that wraps `func` to invoke it with the `this` binding
* of `thisArg` and `partials` prepended to the arguments it receives.
*
* @private
* @param {Function} func The function to wrap.
* @param {number} bitmask The bitmask flags. See `createWrap` for more details.
* @param {*} thisArg The `this` binding of `func`.
* @param {Array} partials The arguments to prepend to those provided to
*  the new function.
* @returns {Function} Returns the new wrapped function.
*/
function createPartial($func, $bitmask, $thisArg, $partials) {
  $isBind = bitmask & WRAP_BIND_FLAG;
      $Ctor = $createCtor(func);

  function wrapper() {
    $argsIndex = -1;
        $argsLength = (is_array($arguments) ? count($arguments) : strlen($arguments));
        $leftIndex = -1;
        $leftLength = (is_array($partials) ? count($partials) : strlen($partials));
        $args = Array($leftLength + $argsLength);
        $fn = (this && this !== $root && this instanceof wrapper) ? $Ctor : func;

    while (++$leftIndex < $leftLength) {
      $args[$leftIndex] = partials[$leftIndex];
    }
    while (argsLength--) {
      $args[$leftIndex++] = arguments[++$argsIndex];
    }
    return $apply($fn, $isBind ? thisArg : this, $args);
  }
  return wrapper;
}

return createPartial;


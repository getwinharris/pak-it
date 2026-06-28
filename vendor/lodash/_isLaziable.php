<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper';
    $getData = require('./_getData');
    $getFuncName = require('./_getFuncName');
    $lodash = require('./wrapperLodash');

/**
* Checks if `func` has a lazy counterpart.
*
* @private
* @param {Function} func The function to check.
* @returns {boolean} Returns `true` if `func` has a lazy counterpart;
*  else `false`.
*/
function isLaziable($func) {
  $funcName = getFuncName(func);
      $other = $lodash[$funcName];

  if (typeof $other != 'function' || !($funcName in $LazyWrapper.prototype)) {
    return false;
  }
  if (func === $other) {
    return true;
  }
  $data = getData(other);
  return !!$data && func === $data[0];
}

return isLaziable;


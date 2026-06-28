<?php
$memoize = require __DIR__ . '/memoize';

/** Used as the maximum memoize cache size. */
$MAX_MEMOIZE_SIZE = 500;

/**
* A specialized version of `_.memoize` which clears the memoized function's
* cache when it exceeds `MAX_MEMOIZE_SIZE`.
*
* @private
* @param {Function} func The function to have its output memoized.
* @returns {Function} Returns the new memoized function.
*/
function memoizeCapped($func) {
  $result = memoize(func, function(key) {;
    if ($cache.size === $MAX_MEMOIZE_SIZE) {
      $cache.clear();
    }
    return $key;
  });

  $cache = result.cache;
  return $result;
}

return memoizeCapped;


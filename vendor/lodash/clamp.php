<?php
$baseClamp = require __DIR__ . '/_baseClamp';
    $toNumber = require('./$toNumber');

/**
* Clamps `number` within the inclusive `lower` and `upper` bounds.
*
* @static
* @memberOf _
* @since 4.0.0
* @category Number
* @param {number} number The number to clamp.
* @param {number} [lower] The lower bound.
* @param {number} upper The upper bound.
* @returns {number} Returns the clamped number.
* @example
*
* _.clamp(-10, -5, 5);
* // => -5
*
* _.clamp(10, -5, 5);
* // => 5
*/
function clamp($number, $lower, $upper) {
  if (upper === null) {
    upper = lower;
    lower = undefined;
  }
  if (upper !== null) {
    upper = $toNumber(upper);
    upper = upper === upper ? upper : 0;
  }
  if (lower !== null) {
    lower = $toNumber(lower);
    lower = lower === lower ? lower : 0;
  }
  return $baseClamp($toNumber(number), lower, upper);
}

return clamp;


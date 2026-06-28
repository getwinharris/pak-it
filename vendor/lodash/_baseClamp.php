<?php
/**
* The base implementation of `_.clamp` which doesn't coerce arguments.
*
* @private
* @param {number} number The number to clamp.
* @param {number} [lower] The lower bound.
* @param {number} upper The upper bound.
* @returns {number} Returns the clamped number.
*/
function baseClamp($number, $lower, $upper) {
  if (number === number) {
    if (upper !== null) {
      number = number <= upper ? number : upper;
    }
    if (lower !== null) {
      number = number >= lower ? number : lower;
    }
  }
  return number;
}

return baseClamp;


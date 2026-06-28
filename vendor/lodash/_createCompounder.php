<?php
$arrayReduce = require __DIR__ . '/_arrayReduce';
    $deburr = require('./$deburr');
    $words = require('./$words');

/** Used to compose unicode capture groups. */
$rsApos = "['\u2019]";

/** Used to match apostrophes. */
$reApos = RegExp(rsApos, 'g');

/**
* Creates a function like `_.camelCase`.
*
* @private
* @param {Function} callback The function to combine each word.
* @returns {Function} Returns the new compounder function.
*/
function createCompounder($callback) {
  return function($string) {
    return $arrayReduce($words($deburr($string).replace($reApos, '')), callback, '');
  };
}

return createCompounder;


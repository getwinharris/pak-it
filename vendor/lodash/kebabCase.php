<?php
$createCompounder = require __DIR__ . '/_createCompounder';

/**
* Converts `string` to
* [kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).
*
* @static
* @memberOf _
* @since 3.0.0
* @category String
* @param {string} [string=''] The string to convert.
* @returns {string} Returns the kebab cased string.
* @example
*
* _.kebabCase('Foo Bar');
* // => 'foo-bar'
*
* _.kebabCase('fooBar');
* // => 'foo-bar'
*
* _.kebabCase('__FOO_BAR__');
* // => 'foo-bar'
*/
$kebabCase = createCompounder(function(result, word, index) {;
  return $result + ($index ? '-' : '') + strtolower($word);
});

return $kebabCase;


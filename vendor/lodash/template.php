<?php
$arrayEach = require __DIR__ . '/_arrayEach.php';
$assignWith = require __DIR__ . '/assignWith.php';
$attempt = require __DIR__ . '/attempt.php';
$baseValues = require __DIR__ . '/_baseValues.php';
$customDefaultsAssignIn = require __DIR__ . '/_customDefaultsAssignIn.php';
$escapeStringChar = require __DIR__ . '/_escapeStringChar.php';
$isError = require __DIR__ . '/isError.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$keys = require __DIR__ . '/keys.php';
$reInterpolate = require __DIR__ . '/_reInterpolate.php';
$templateSettings = require __DIR__ . '/templateSettings.php';
$toString = require __DIR__ . '/toString.php';
$INVALID_TEMPL_VAR_ERROR_TEXT = 'Invalid `variable` option passed into `_.template`';
$INVALID_TEMPL_IMPORTS_ERROR_TEXT = 'Invalid `imports` option passed into `_.template`';
$reEmptyStringLeading = '/\\b__p \\+= \'\';/g';
$reEmptyStringMiddle = '/\\b(__p \\+=) \'\' \\+/g';
$reEmptyStringTrailing = '/(__e\\(.*?\\)|\\b__t\\)) \\+\\n\'\';/g';
$reForbiddenIdentifierChars = '/[()=,{}\\[\\]\\\\/#\\s]/';
$reEsTemplate = '/\\$\\{([^\\\\}]*(?:\\\\.[^\\\\}]*)*)\\}/g';
$reNoMatch = '/($^)/';
$reUnescapedString = '/[\'\\n\\r\\u2028\\u2029\\\\]/g';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function template($string, $options, $guard) {
    $settings = $templateSettings['imports']['_']['templateSettings'] || $templateSettings;
    if ($guard && $isIterateeCall($string, $options, $guard)) {
        $options = null;
    }
    $string = $toString($string);
    $options = $assignWith([], $options, $settings, $customDefaultsAssignIn);
    $imports = $assignWith([], $options['imports'], $settings['imports'], $customDefaultsAssignIn);
    $importsKeys = $keys($imports);
    $importsValues = $baseValues($imports, $importsKeys);
    $arrayEach($importsKeys, function($key) {
        if (preg_match($key, $reForbiddenIdentifierChars)) {
            throw new Error($INVALID_TEMPL_IMPORTS_ERROR_TEXT);
        }
});
    $isEscaping = null;
    $isEvaluating = null;
    $index = 0;
    $interpolate = $options['interpolate'] || $reNoMatch;
    $source = "__p += '";
    $reDelimiters = '/' . $options['escape'] || $reNoMatch['source'] + '|' + $interpolate['source'] + '|' + ($interpolate === $reInterpolate ? $reEsTemplate : $reNoMatch)['source'] + '|' + $options['evaluate'] || $reNoMatch['source'] + '|$' . '/' . 'g';
    $sourceURL = (call_user_func($hasOwnProperty, $options, 'sourceURL') ? '//# sourceURL=' + str_replace('/\\s/g', ' ', $options['sourceURL'] + '') + '\n' : '');
    str_replace($reDelimiters, function($match, $escapeValue, $interpolateValue, $esTemplateValue, $evaluateValue, $offset) {
        $interpolateValue || $interpolateValue = $esTemplateValue;
        $source += str_replace($reUnescapedString, $escapeStringChar, array_slice($index, $offset, $string));
        if ($escapeValue) {
            $isEscaping = true;
            $source += "' +\n__e(" + $escapeValue + ") +\n'";
        }
        if ($evaluateValue) {
            $isEvaluating = true;
            $source += "';\n" + $evaluateValue + ";\n__p += '";
        }
        if ($interpolateValue) {
            $source += "' +\n((__t = (" + $interpolateValue + ")) == null ? '' : __t) +\n'";
        }
        $index = $offset + (is_array($match) ? count($match) : strlen($match));
        return $match;
}, $string);
    $source += "';\n";
    $variable = call_user_func($hasOwnProperty, $options, 'variable') && $options['variable'];
    if (!$variable) {
        $source = 'with (obj) {\n' + $source + '\n}\n';
    } else if (preg_match($variable, $reForbiddenIdentifierChars)) {
        throw new Error($INVALID_TEMPL_VAR_ERROR_TEXT);
    }
    $source = str_replace($reEmptyStringTrailing, '$1;', str_replace($reEmptyStringMiddle, '$1', ($isEvaluating ? str_replace($reEmptyStringLeading, '', $source) : $source)));
    $source = 'function(' + $variable || 'obj' + ') {\n' + ($variable ? '' : 'obj || (obj = {});\n') + "var __t, __p = ''" + ($isEscaping ? ', __e = _.escape' : '') + ($isEvaluating ? ', __j = Array.prototype.join;\n' + "function print() { __p += __j.call(arguments, '') }\n" : ';\n') + $source + 'return __p\n}';
    $result = $attempt(function() {
        return (function() { return $sourceURL + 'return ' + $source; })['apply'](null, $importsValues);
});
    $result['source'] = $source;
    if ($isError($result)) {
        throw $result;
    }
    return $result;
}
return 'template';

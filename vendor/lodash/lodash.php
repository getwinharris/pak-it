<?php
;
call_user_func(function() {
        $undefined = null;
        $VERSION = '4.18.1';
        $LARGE_ARRAY_SIZE = 200;
        $CORE_ERROR_TEXT = 'Unsupported core-js use. Try https://npms.io/search?q=ponyfill.';
        $FUNC_ERROR_TEXT = 'Expected a function';
        $INVALID_TEMPL_VAR_ERROR_TEXT = 'Invalid `variable` option passed into `_.template`';
        $INVALID_TEMPL_IMPORTS_ERROR_TEXT = 'Invalid `imports` option passed into `_.template`';
        $HASH_UNDEFINED = '__lodash_hash_undefined__';
        $MAX_MEMOIZE_SIZE = 500;
        $PLACEHOLDER = '__lodash_placeholder__';
        $CLONE_DEEP_FLAG = 1;
        $CLONE_FLAT_FLAG = 2;
        $CLONE_SYMBOLS_FLAG = 4;
        $COMPARE_PARTIAL_FLAG = 1;
        $COMPARE_UNORDERED_FLAG = 2;
        $WRAP_BIND_FLAG = 1;
        $WRAP_BIND_KEY_FLAG = 2;
        $WRAP_CURRY_BOUND_FLAG = 4;
        $WRAP_CURRY_FLAG = 8;
        $WRAP_CURRY_RIGHT_FLAG = 16;
        $WRAP_PARTIAL_FLAG = 32;
        $WRAP_PARTIAL_RIGHT_FLAG = 64;
        $WRAP_ARY_FLAG = 128;
        $WRAP_REARG_FLAG = 256;
        $WRAP_FLIP_FLAG = 512;
        $DEFAULT_TRUNC_LENGTH = 30;
        $DEFAULT_TRUNC_OMISSION = '...';
        $HOT_COUNT = 800;
        $HOT_SPAN = 16;
        $LAZY_FILTER_FLAG = 1;
        $LAZY_MAP_FLAG = 2;
        $LAZY_WHILE_FLAG = 3;
        $INFINITY = 1 / 0;
        $MAX_SAFE_INTEGER = 9007199254740991;
        $MAX_INTEGER = 1.7976931348623E+308;
        $NAN = 0 / 0;
        $MAX_ARRAY_LENGTH = 4294967295;
        $MAX_ARRAY_INDEX = $MAX_ARRAY_LENGTH - 1;
        $HALF_MAX_ARRAY_LENGTH = $MAX_ARRAY_LENGTH >> 1;
        $wrapFlags = [['ary', $WRAP_ARY_FLAG], ['bind', $WRAP_BIND_FLAG], ['bindKey', $WRAP_BIND_KEY_FLAG], ['curry', $WRAP_CURRY_FLAG], ['curryRight', $WRAP_CURRY_RIGHT_FLAG], ['flip', $WRAP_FLIP_FLAG], ['partial', $WRAP_PARTIAL_FLAG], ['partialRight', $WRAP_PARTIAL_RIGHT_FLAG], ['rearg', $WRAP_REARG_FLAG]];
        $argsTag = '[object Arguments]';
        $arrayTag = '[object Array]';
        $asyncTag = '[object AsyncFunction]';
        $boolTag = '[object Boolean]';
        $dateTag = '[object Date]';
        $domExcTag = '[object DOMException]';
        $errorTag = '[object Error]';
        $funcTag = '[object Function]';
        $genTag = '[object GeneratorFunction]';
        $mapTag = '[object Map]';
        $numberTag = '[object Number]';
        $nullTag = '[object Null]';
        $objectTag = '[object Object]';
        $promiseTag = '[object Promise]';
        $proxyTag = '[object Proxy]';
        $regexpTag = '[object RegExp]';
        $setTag = '[object Set]';
        $stringTag = '[object String]';
        $symbolTag = '[object Symbol]';
        $undefinedTag = '[object Undefined]';
        $weakMapTag = '[object WeakMap]';
        $weakSetTag = '[object WeakSet]';
        $arrayBufferTag = '[object ArrayBuffer]';
        $dataViewTag = '[object DataView]';
        $float32Tag = '[object Float32Array]';
        $float64Tag = '[object Float64Array]';
        $int8Tag = '[object Int8Array]';
        $int16Tag = '[object Int16Array]';
        $int32Tag = '[object Int32Array]';
        $uint8Tag = '[object Uint8Array]';
        $uint8ClampedTag = '[object Uint8ClampedArray]';
        $uint16Tag = '[object Uint16Array]';
        $uint32Tag = '[object Uint32Array]';
        $reEmptyStringLeading = '/\\b__p \\+= \'\';/g';
        $reEmptyStringMiddle = '/\\b(__p \\+=) \'\' \\+/g';
        $reEmptyStringTrailing = '/(__e\\(.*?\\)|\\b__t\\)) \\+\\n\'\';/g';
        $reEscapedHtml = '/&(?:amp|lt|gt|quot|#39);/g';
        $reUnescapedHtml = '/[&<>"\']/g';
        $reHasEscapedHtml = '/' . $reEscapedHtml['source'] . '/';
        $reHasUnescapedHtml = '/' . $reUnescapedHtml['source'] . '/';
        $reEscape = '/<%-([\\s\\S]+?)%>/g';
        $reEvaluate = '/<%([\\s\\S]+?)%>/g';
        $reInterpolate = '/<%=([\\s\\S]+?)%>/g';
        $reIsDeepProp = '/\\.|\\[(?:[^[\\]]*|(["\'])(?:(?!\\1)[^\\\\]|\\\\.)*?\\1)\\]/';
        $reIsPlainProp = '/^\\w*$/';
        $rePropName = '/[^.[\\]]+|\\[(?:(-?\\d+(?:\\.\\d+)?)|(["\'])((?:(?!\\2)[^\\\\]|\\\\.)*?)\\2)\\]|(?=(?:\\.|\\[\\])(?:\\.|\\[\\]|$))/g';
        $reRegExpChar = '/[\\\\^$.*+?()[\\]{}|]/g';
        $reHasRegExpChar = '/' . $reRegExpChar['source'] . '/';
        $reTrimStart = '/^\\s+/';
        $reWhitespace = '/\\s/';
        $reWrapComment = '/\\{(?:\\n\\\\/#\\* \\[wrapped with .+\\] \\*\\\\/#)?\\n?/';
        $reWrapDetails = '/\\{\\n\\\\/#\\* \\[wrapped with (.+)\\] \\*/';
        $reSplitDetails = '/,? & /';
        $reAsciiWord = '/[^\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\x7f]+/g';
        $reForbiddenIdentifierChars = '/[()=,{}\\[\\]\\\\/#\\s]/';
        $reEscapeChar = '/\\\\(\\\\)?/g';
        $reEsTemplate = '/\\$\\{([^\\\\}]*(?:\\\\.[^\\\\}]*)*)\\}/g';
        $reFlags = '/\\w*$/';
        $reIsBadHex = '/^[-+]0x[0-9a-f]+$/i';
        $reIsBinary = '/^0b[01]+$/i';
        $reIsHostCtor = '/^\\[object .+?Constructor\\]$/';
        $reIsOctal = '/^0o[0-7]+$/i';
        $reIsUint = '/^(?:0|[1-9]\\d*)$/';
        $reLatin = '/[\\xc0-\\xd6\\xd8-\\xf6\\xf8-\\xff\\u0100-\\u017f]/g';
        $reNoMatch = '/($^)/';
        $reUnescapedString = '/[\'\\n\\r\\u2028\\u2029\\\\]/g';
        $rsAstralRange = '\\ud800-\\udfff';
        $rsComboMarksRange = '\\u0300-\\u036f';
        $reComboHalfMarksRange = '\\ufe20-\\ufe2f';
        $rsComboSymbolsRange = '\\u20d0-\\u20ff';
        $rsComboRange = $rsComboMarksRange + $reComboHalfMarksRange + $rsComboSymbolsRange;
        $rsDingbatRange = '\\u2700-\\u27bf';
        $rsLowerRange = 'a-z\\xdf-\\xf6\\xf8-\\xff';
        $rsMathOpRange = '\\xac\\xb1\\xd7\\xf7';
        $rsNonCharRange = '\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf';
        $rsPunctuationRange = '\\u2000-\\u206f';
        $rsSpaceRange = ' \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000';
        $rsUpperRange = 'A-Z\\xc0-\\xd6\\xd8-\\xde';
        $rsVarRange = '\\ufe0e\\ufe0f';
        $rsBreakRange = $rsMathOpRange + $rsNonCharRange + $rsPunctuationRange + $rsSpaceRange;
        $rsApos = "['\u2019]";
        $rsAstral = '[' + $rsAstralRange + ']';
        $rsBreak = '[' + $rsBreakRange + ']';
        $rsCombo = '[' + $rsComboRange + ']';
        $rsDigits = '\\d+';
        $rsDingbat = '[' + $rsDingbatRange + ']';
        $rsLower = '[' + $rsLowerRange + ']';
        $rsMisc = '[^' + $rsAstralRange + $rsBreakRange + $rsDigits + $rsDingbatRange + $rsLowerRange + $rsUpperRange + ']';
        $rsFitz = '\\ud83c[\\udffb-\\udfff]';
        $rsModifier = '(?:' + $rsCombo + '|' + $rsFitz + ')';
        $rsNonAstral = '[^' + $rsAstralRange + ']';
        $rsRegional = '(?:\\ud83c[\\udde6-\\uddff]){2}';
        $rsSurrPair = '[\\ud800-\\udbff][\\udc00-\\udfff]';
        $rsUpper = '[' + $rsUpperRange + ']';
        $rsZWJ = '\\u200d';
        $rsMiscLower = '(?:' + $rsLower + '|' + $rsMisc + ')';
        $rsMiscUpper = '(?:' + $rsUpper + '|' + $rsMisc + ')';
        $rsOptContrLower = '(?:' + $rsApos + '(?:d|ll|m|re|s|t|ve))?';
        $rsOptContrUpper = '(?:' + $rsApos + '(?:D|LL|M|RE|S|T|VE))?';
        $reOptMod = $rsModifier + '?';
        $rsOptVar = '[' + $rsVarRange + ']?';
        $rsOptJoin = '(?:' + $rsZWJ + '(?:' + implode('|', [$rsNonAstral, $rsRegional, $rsSurrPair]) + ')' + $rsOptVar + $reOptMod + ')*';
        $rsOrdLower = '\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])';
        $rsOrdUpper = '\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])';
        $rsSeq = $rsOptVar + $reOptMod + $rsOptJoin;
        $rsEmoji = '(?:' + implode('|', [$rsDingbat, $rsRegional, $rsSurrPair]) + ')' + $rsSeq;
        $rsSymbol = '(?:' + implode('|', [$rsNonAstral + $rsCombo + '?', $rsCombo, $rsRegional, $rsSurrPair, $rsAstral]) + ')';
        $reApos = '/' . $rsApos . '/' . 'g';
        $reComboMark = '/' . $rsCombo . '/' . 'g';
        $reUnicode = '/' . $rsFitz + '(?=' + $rsFitz + ')|' + $rsSymbol + $rsSeq . '/' . 'g';
        $reUnicodeWord = '/' . implode('|', [$rsUpper + '?' + $rsLower + '+' + $rsOptContrLower + '(?=' + implode('|', [$rsBreak, $rsUpper, '$']) + ')', $rsMiscUpper + '+' + $rsOptContrUpper + '(?=' + implode('|', [$rsBreak, $rsUpper + $rsMiscLower, '$']) + ')', $rsUpper + '?' + $rsMiscLower + '+' + $rsOptContrLower, $rsUpper + '+' + $rsOptContrUpper, $rsOrdUpper, $rsOrdLower, $rsDigits, $rsEmoji]) . '/' . 'g';
        $reHasUnicode = '/' . '[' + $rsZWJ + $rsAstralRange + $rsComboRange + $rsVarRange + ']' . '/';
        $reHasUnicodeWord = '/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/';
        $contextProps = ['Array', 'Buffer', 'DataView', 'Date', 'Error', 'Float32Array', 'Float64Array', 'Function', 'Int8Array', 'Int16Array', 'Int32Array', 'Map', 'Math', 'Object', 'Promise', 'RegExp', 'Set', 'String', 'Symbol', 'TypeError', 'Uint8Array', 'Uint8ClampedArray', 'Uint16Array', 'Uint32Array', 'WeakMap', '_', 'clearTimeout', 'isFinite', 'parseInt', 'setTimeout'];
        $templateCounter = -1;
        $typedArrayTags = [];
        $typedArrayTags[$float32Tag] = $typedArrayTags[$float64Tag] = $typedArrayTags[$int8Tag] = $typedArrayTags[$int16Tag] = $typedArrayTags[$int32Tag] = $typedArrayTags[$uint8Tag] = $typedArrayTags[$uint8ClampedTag] = $typedArrayTags[$uint16Tag] = $typedArrayTags[$uint32Tag] = true;
        $typedArrayTags[$argsTag] = $typedArrayTags[$arrayTag] = $typedArrayTags[$arrayBufferTag] = $typedArrayTags[$boolTag] = $typedArrayTags[$dataViewTag] = $typedArrayTags[$dateTag] = $typedArrayTags[$errorTag] = $typedArrayTags[$funcTag] = $typedArrayTags[$mapTag] = $typedArrayTags[$numberTag] = $typedArrayTags[$objectTag] = $typedArrayTags[$regexpTag] = $typedArrayTags[$setTag] = $typedArrayTags[$stringTag] = $typedArrayTags[$weakMapTag] = false;
        $cloneableTags = [];
        $cloneableTags[$argsTag] = $cloneableTags[$arrayTag] = $cloneableTags[$arrayBufferTag] = $cloneableTags[$dataViewTag] = $cloneableTags[$boolTag] = $cloneableTags[$dateTag] = $cloneableTags[$float32Tag] = $cloneableTags[$float64Tag] = $cloneableTags[$int8Tag] = $cloneableTags[$int16Tag] = $cloneableTags[$int32Tag] = $cloneableTags[$mapTag] = $cloneableTags[$numberTag] = $cloneableTags[$objectTag] = $cloneableTags[$regexpTag] = $cloneableTags[$setTag] = $cloneableTags[$stringTag] = $cloneableTags[$symbolTag] = $cloneableTags[$uint8Tag] = $cloneableTags[$uint8ClampedTag] = $cloneableTags[$uint16Tag] = $cloneableTags[$uint32Tag] = true;
        $cloneableTags[$errorTag] = $cloneableTags[$funcTag] = $cloneableTags[$weakMapTag] = false;
        $deburredLetters = [
            'À' => 'A',
            'Á' => 'A',
            'Â' => 'A',
            'Ã' => 'A',
            'Ä' => 'A',
            'Å' => 'A',
            'à' => 'a',
            'á' => 'a',
            'â' => 'a',
            'ã' => 'a',
            'ä' => 'a',
            'å' => 'a',
            'Ç' => 'C',
            'ç' => 'c',
            'Ð' => 'D',
            'ð' => 'd',
            'È' => 'E',
            'É' => 'E',
            'Ê' => 'E',
            'Ë' => 'E',
            'è' => 'e',
            'é' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'Ì' => 'I',
            'Í' => 'I',
            'Î' => 'I',
            'Ï' => 'I',
            'ì' => 'i',
            'í' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'Ñ' => 'N',
            'ñ' => 'n',
            'Ò' => 'O',
            'Ó' => 'O',
            'Ô' => 'O',
            'Õ' => 'O',
            'Ö' => 'O',
            'Ø' => 'O',
            'ò' => 'o',
            'ó' => 'o',
            'ô' => 'o',
            'õ' => 'o',
            'ö' => 'o',
            'ø' => 'o',
            'Ù' => 'U',
            'Ú' => 'U',
            'Û' => 'U',
            'Ü' => 'U',
            'ù' => 'u',
            'ú' => 'u',
            'û' => 'u',
            'ü' => 'u',
            'Ý' => 'Y',
            'ý' => 'y',
            'ÿ' => 'y',
            'Æ' => 'Ae',
            'æ' => 'ae',
            'Þ' => 'Th',
            'þ' => 'th',
            'ß' => 'ss',
            'Ā' => 'A',
            'Ă' => 'A',
            'Ą' => 'A',
            'ā' => 'a',
            'ă' => 'a',
            'ą' => 'a',
            'Ć' => 'C',
            'Ĉ' => 'C',
            'Ċ' => 'C',
            'Č' => 'C',
            'ć' => 'c',
            'ĉ' => 'c',
            'ċ' => 'c',
            'č' => 'c',
            'Ď' => 'D',
            'Đ' => 'D',
            'ď' => 'd',
            'đ' => 'd',
            'Ē' => 'E',
            'Ĕ' => 'E',
            'Ė' => 'E',
            'Ę' => 'E',
            'Ě' => 'E',
            'ē' => 'e',
            'ĕ' => 'e',
            'ė' => 'e',
            'ę' => 'e',
            'ě' => 'e',
            'Ĝ' => 'G',
            'Ğ' => 'G',
            'Ġ' => 'G',
            'Ģ' => 'G',
            'ĝ' => 'g',
            'ğ' => 'g',
            'ġ' => 'g',
            'ģ' => 'g',
            'Ĥ' => 'H',
            'Ħ' => 'H',
            'ĥ' => 'h',
            'ħ' => 'h',
            'Ĩ' => 'I',
            'Ī' => 'I',
            'Ĭ' => 'I',
            'Į' => 'I',
            'İ' => 'I',
            'ĩ' => 'i',
            'ī' => 'i',
            'ĭ' => 'i',
            'į' => 'i',
            'ı' => 'i',
            'Ĵ' => 'J',
            'ĵ' => 'j',
            'Ķ' => 'K',
            'ķ' => 'k',
            'ĸ' => 'k',
            'Ĺ' => 'L',
            'Ļ' => 'L',
            'Ľ' => 'L',
            'Ŀ' => 'L',
            'Ł' => 'L',
            'ĺ' => 'l',
            'ļ' => 'l',
            'ľ' => 'l',
            'ŀ' => 'l',
            'ł' => 'l',
            'Ń' => 'N',
            'Ņ' => 'N',
            'Ň' => 'N',
            'Ŋ' => 'N',
            'ń' => 'n',
            'ņ' => 'n',
            'ň' => 'n',
            'ŋ' => 'n',
            'Ō' => 'O',
            'Ŏ' => 'O',
            'Ő' => 'O',
            'ō' => 'o',
            'ŏ' => 'o',
            'ő' => 'o',
            'Ŕ' => 'R',
            'Ŗ' => 'R',
            'Ř' => 'R',
            'ŕ' => 'r',
            'ŗ' => 'r',
            'ř' => 'r',
            'Ś' => 'S',
            'Ŝ' => 'S',
            'Ş' => 'S',
            'Š' => 'S',
            'ś' => 's',
            'ŝ' => 's',
            'ş' => 's',
            'š' => 's',
            'Ţ' => 'T',
            'Ť' => 'T',
            'Ŧ' => 'T',
            'ţ' => 't',
            'ť' => 't',
            'ŧ' => 't',
            'Ũ' => 'U',
            'Ū' => 'U',
            'Ŭ' => 'U',
            'Ů' => 'U',
            'Ű' => 'U',
            'Ų' => 'U',
            'ũ' => 'u',
            'ū' => 'u',
            'ŭ' => 'u',
            'ů' => 'u',
            'ű' => 'u',
            'ų' => 'u',
            'Ŵ' => 'W',
            'ŵ' => 'w',
            'Ŷ' => 'Y',
            'ŷ' => 'y',
            'Ÿ' => 'Y',
            'Ź' => 'Z',
            'Ż' => 'Z',
            'Ž' => 'Z',
            'ź' => 'z',
            'ż' => 'z',
            'ž' => 'z',
            'Ĳ' => 'IJ',
            'ĳ' => 'ij',
            'Œ' => 'Oe',
            'œ' => 'oe',
            'ŉ' => "'n",
            'ſ' => 's'
        ];
        $htmlEscapes = [
            '&' => '&amp;',
            '<' => '&lt;',
            '>' => '&gt;',
            '"' => '&quot;',
            '\'' => '&#39;'
        ];
        $htmlUnescapes = [
            '&amp;' => '&',
            '&lt;' => '<',
            '&gt;' => '>',
            '&quot;' => '"',
            '&#39;' => "'"
        ];
        $stringEscapes = [
            '\\' => '\\',
            '\'' => "'",
            '
' => 'n',
            '' => 'r',
            ' ' => 'u2028',
            ' ' => 'u2029'
        ];
        $freeParseFloat = parseFloat;
        $freeParseInt = $parseInt;
        $freeGlobal = (is_object($global) || is_array($global)) && $global && $global['Object'] === $Object && $global;
        $freeSelf = (is_object($self) || is_array($self)) && $self && $self['Object'] === $Object && $self;
        $root = $freeGlobal || $freeSelf || (static function() { return null; })();
        $freeExports = (is_object(exports) || is_array(exports)) && exports && !exports['nodeType'] && exports;
        $freeModule = $freeExports && (is_object(module) || is_array(module)) && module && !module['nodeType'] && module;
        $moduleExports = $freeModule && $freeModule['exports'] === $freeExports;
        $freeProcess = $moduleExports && $freeGlobal['process'];
        $nodeUtil = (function() {
        try {
            $types = $freeModule && $freeModule['require'] && $freeModule['require']('util')['types'];
            if ($types) {
                return $types;
            }
            return $freeProcess && $freeProcess['binding'] && $freeProcess['binding']('util');
        } catch (\Throwable $e) {}
})();
        $nodeIsArrayBuffer = $nodeUtil && $nodeUtil['isArrayBuffer'];
        $nodeIsDate = $nodeUtil && $nodeUtil['isDate'];
        $nodeIsMap = $nodeUtil && $nodeUtil['isMap'];
        $nodeIsRegExp = $nodeUtil && $nodeUtil['isRegExp'];
        $nodeIsSet = $nodeUtil && $nodeUtil['isSet'];
        $nodeIsTypedArray = $nodeUtil && $nodeUtil['isTypedArray'];
        function apply($func, $thisArg, $args) {
            switch ((is_array($args) ? count($args) : strlen($args))) {
                case 0:
                    return call_user_func($func, $thisArg);
                case 1:
                    return call_user_func($func, $thisArg, $args[0]);
                case 2:
                    return call_user_func($func, $thisArg, $args[0], $args[1]);
                case 3:
                    return call_user_func($func, $thisArg, $args[0], $args[1], $args[2]);
            }
            return $func['apply']($thisArg, $args);
        }
        function arrayAggregator($array, $setter, $iteratee, $accumulator) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            while (++$index < $length) {
                $value = $array[$index];
                $setter($accumulator, $value, $iteratee($value), $array);
            }
            return $accumulator;
        }
        function arrayEach($array, $iteratee) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            while (++$index < $length) {
                if ($iteratee($array[$index], $index, $array) === false) {
                    break;
                }
            }
            return $array;
        }
        function arrayEachRight($array, $iteratee) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            while ($length--) {
                if ($iteratee($array[$length], $length, $array) === false) {
                    break;
                }
            }
            return $array;
        }
        function arrayEvery($array, $predicate) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            while (++$index < $length) {
                if (!$predicate($array[$index], $index, $array)) {
                    return false;
                }
            }
            return true;
        }
        function arrayFilter($array, $predicate) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            $resIndex = 0;
            $result = [];
            while (++$index < $length) {
                $value = $array[$index];
                if ($predicate($value, $index, $array)) {
                    $result[$resIndex++] = $value;
                }
            }
            return $result;
        }
        function arrayIncludes($array, $value) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return !!$length && $baseIndexOf($array, $value, 0) > -1;
        }
        function arrayIncludesWith($array, $value, $comparator) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            while (++$index < $length) {
                if ($comparator($value, $array[$index])) {
                    return true;
                }
            }
            return false;
        }
        function arrayMap($array, $iteratee) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            $result = array_fill(0, $length, null);
            while (++$index < $length) {
                $result[$index] = $iteratee($array[$index], $index, $array);
            }
            return $result;
        }
        function arrayPush($array, $values) {
            $index = -1;
            $length = (is_array($values) ? count($values) : strlen($values));
            $offset = (is_array($array) ? count($array) : strlen($array));
            while (++$index < $length) {
                $array[$offset + $index] = $values[$index];
            }
            return $array;
        }
        function arrayReduce($array, $iteratee, $accumulator, $initAccum) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if ($initAccum && $length) {
                $accumulator = $array[++$index];
            }
            while (++$index < $length) {
                $accumulator = $iteratee($accumulator, $array[$index], $index, $array);
            }
            return $accumulator;
        }
        function arrayReduceRight($array, $iteratee, $accumulator, $initAccum) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if ($initAccum && $length) {
                $accumulator = $array[--$length];
            }
            while ($length--) {
                $accumulator = $iteratee($accumulator, $array[$length], $length, $array);
            }
            return $accumulator;
        }
        function arraySome($array, $predicate) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            while (++$index < $length) {
                if ($predicate($array[$index], $index, $array)) {
                    return true;
                }
            }
            return false;
        }
        $asciiSize = $baseProperty('length');
        function asciiToArray($string) {
            return explode('', $string);
        }
        function asciiWords($string) {
            return $string['match']($reAsciiWord) || [];
        }
        function baseFindKey($collection, $predicate, $eachFunc) {
            $result = null;
            $eachFunc($collection, function($value, $key, $collection) {
        if ($predicate($value, $key, $collection)) {
            $result = $key;
            return false;
        }
});
            return $result;
        }
        function baseFindIndex($array, $predicate, $fromIndex, $fromRight) {
            $length = (is_array($array) ? count($array) : strlen($array));
            $index = $fromIndex + ($fromRight ? 1 : -1);
            while (($fromRight ? $index-- : ++$index < $length)) {
                if ($predicate($array[$index], $index, $array)) {
                    return $index;
                }
            }
            return -1;
        }
        function baseIndexOf($array, $value, $fromIndex) {
            return ($value === $value ? $strictIndexOf($array, $value, $fromIndex) : $baseFindIndex($array, $baseIsNaN, $fromIndex));
        }
        function baseIndexOfWith($array, $value, $fromIndex, $comparator) {
            $index = $fromIndex - 1;
            $length = (is_array($array) ? count($array) : strlen($array));
            while (++$index < $length) {
                if ($comparator($array[$index], $value)) {
                    return $index;
                }
            }
            return -1;
        }
        function baseIsNaN($value) {
            return $value !== $value;
        }
        function baseMean($array, $iteratee) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseSum($array, $iteratee) / $length : $NAN);
        }
        function baseProperty($key) {
            return function($object) {
        return ($object == null ? null : $object[$key]);
};
        }
        function basePropertyOf($object) {
            return function($key) {
        return ($object == null ? null : $object[$key]);
};
        }
        function baseReduce($collection, $iteratee, $accumulator, $initAccum, $eachFunc) {
            $eachFunc($collection, function($value, $index, $collection) {
        $accumulator = ($initAccum ? (static function() { $initAccum = false; return $value; })() : $iteratee($accumulator, $value, $index, $collection));
});
            return $accumulator;
        }
        function baseSortBy($array, $comparer) {
            $length = (is_array($array) ? count($array) : strlen($array));
            sort($comparer, $array);
            while ($length--) {
                $array[$length] = $array[$length]['value'];
            }
            return $array;
        }
        function baseSum($array, $iteratee) {
            $result = null;
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            while (++$index < $length) {
                $current = $iteratee($array[$index]);
                if ($current !== null) {
                    $result = ($result === null ? $current : $result + $current);
                }
            }
            return $result;
        }
        function baseTimes($n, $iteratee) {
            $index = -1;
            $result = array_fill(0, $n, null);
            while (++$index < $n) {
                $result[$index] = $iteratee($index);
            }
            return $result;
        }
        function baseToPairs($object, $props) {
            return $arrayMap($props, function($key) {
        return [$key, $object[$key]];
});
        }
        function baseTrim($string) {
            return ($string ? str_replace($reTrimStart, '', array_slice(0, $trimmedEndIndex($string) + 1, $string)) : $string);
        }
        function baseUnary($func) {
            return function($value) {
        return $func($value);
};
        }
        function baseValues($object, $props) {
            return $arrayMap($props, function($key) {
        return $object[$key];
});
        }
        function cacheHas($cache, $key) {
            return $cache['has']($key);
        }
        function charsStartIndex($strSymbols, $chrSymbols) {
            $index = -1;
            $length = (is_array($strSymbols) ? count($strSymbols) : strlen($strSymbols));
            while (++$index < $length && $baseIndexOf($chrSymbols, $strSymbols[$index], 0) > -1) {}
            return $index;
        }
        function charsEndIndex($strSymbols, $chrSymbols) {
            $index = (is_array($strSymbols) ? count($strSymbols) : strlen($strSymbols));
            while ($index-- && $baseIndexOf($chrSymbols, $strSymbols[$index], 0) > -1) {}
            return $index;
        }
        function countHolders($array, $placeholder) {
            $length = (is_array($array) ? count($array) : strlen($array));
            $result = 0;
            while ($length--) {
                if ($array[$length] === $placeholder) {
                    ++$result;
                }
            }
            return $result;
        }
        $deburrLetter = $basePropertyOf($deburredLetters);
        $escapeHtmlChar = $basePropertyOf($htmlEscapes);
        function escapeStringChar($chr) {
            return '\\' + $stringEscapes[$chr];
        }
        function getValue($object, $key) {
            return ($object == null ? null : $object[$key]);
        }
        function hasUnicode($string) {
            return preg_match($string, $reHasUnicode);
        }
        function hasUnicodeWord($string) {
            return preg_match($string, $reHasUnicodeWord);
        }
        function iteratorToArray($iterator) {
            $data = null;
            $result = [];
            while (!$data = $iterator['next']()['done']) {
                $result[] = $data['value'];
            }
            return $result;
        }
        function mapToArray($map) {
            $index = -1;
            $result = array_fill(0, $map['size'], null);
            $map['forEach'](function($value, $key) {
        $result[++$index] = [$key, $value];
});
            return $result;
        }
        function overArg($func, $transform) {
            return function($arg) {
        return $func($transform($arg));
};
        }
        function replaceHolders($array, $placeholder) {
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            $resIndex = 0;
            $result = [];
            while (++$index < $length) {
                $value = $array[$index];
                if ($value === $placeholder || $value === $PLACEHOLDER) {
                    $array[$index] = $PLACEHOLDER;
                    $result[$resIndex++] = $index;
                }
            }
            return $result;
        }
        function setToArray($set) {
            $index = -1;
            $result = array_fill(0, $set['size'], null);
            $set['forEach'](function($value) {
        $result[++$index] = $value;
});
            return $result;
        }
        function setToPairs($set) {
            $index = -1;
            $result = array_fill(0, $set['size'], null);
            $set['forEach'](function($value) {
        $result[++$index] = [$value, $value];
});
            return $result;
        }
        function strictIndexOf($array, $value, $fromIndex) {
            $index = $fromIndex - 1;
            $length = (is_array($array) ? count($array) : strlen($array));
            while (++$index < $length) {
                if ($array[$index] === $value) {
                    return $index;
                }
            }
            return -1;
        }
        function strictLastIndexOf($array, $value, $fromIndex) {
            $index = $fromIndex + 1;
            while ($index--) {
                if ($array[$index] === $value) {
                    return $index;
                }
            }
            return $index;
        }
        function stringSize($string) {
            return ($hasUnicode($string) ? $unicodeSize($string) : $asciiSize($string));
        }
        function stringToArray($string) {
            return ($hasUnicode($string) ? $unicodeToArray($string) : $asciiToArray($string));
        }
        function trimmedEndIndex($string) {
            $index = (is_array($string) ? count($string) : strlen($string));
            while ($index-- && preg_match($string['charAt']($index), $reWhitespace)) {}
            return $index;
        }
        $unescapeHtmlChar = $basePropertyOf($htmlUnescapes);
        function unicodeSize($string) {
            $result = $reUnicode['lastIndex'] = 0;
            while (preg_match($string, $reUnicode)) {
                ++$result;
            }
            return $result;
        }
        function unicodeToArray($string) {
            return $string['match']($reUnicode) || [];
        }
        function unicodeWords($string) {
            return $string['match']($reUnicodeWord) || [];
        }
        $runInContext = function($context) {
        $context = ($context == null ? $root : $_['defaults']($root['Object'](), $context, $_['pick']($root, $contextProps)));
        $Array = $context['Array'];
        $Date = $context['Date'];
        $Error = $context['Error'];
        $Function = $context['Function'];
        $Math = $context['Math'];
        $Object = $context['Object'];
        $RegExp = $context['RegExp'];
        $String = $context['String'];
        $TypeError = $context['TypeError'];
        $arrayProto = 'Array'['prototype'];
        $funcProto = 'Function'['prototype'];
        $objectProto = $Object['prototype'];
        $coreJsData = $context['__core-js_shared__'];
        $funcToString = $funcProto['toString'];
        $hasOwnProperty = $objectProto['hasOwnProperty'];
        $idCounter = 0;
        $maskSrcKey = (function() {
        $uid = preg_match('/[^.]+$/', $coreJsData && $coreJsData['keys'] && $coreJsData['keys']['IE_PROTO'] || '');
        return ($uid ? 'Symbol(src)_1.' + $uid : '');
})();
        $nativeObjectToString = $objectProto['toString'];
        $objectCtorString = call_user_func($funcToString, $Object);
        $oldDash = $root['_'];
        $reIsNative = '/' . '^' + str_replace('/hasOwnProperty|(function).*?(?=\\\\\\()| for .+?(?=\\\\\\])/g', '$1.*?', str_replace($reRegExpChar, '\\$&', call_user_func($funcToString, $hasOwnProperty))) + '$' . '/';
        $Buffer = ($moduleExports ? $context['Buffer'] : null);
        $Symbol = $context['Symbol'];
        $Uint8Array = $context['Uint8Array'];
        $allocUnsafe = ($Buffer ? $Buffer['allocUnsafe'] : null);
        $getPrototype = $overArg($Object['getPrototypeOf'], $Object);
        $objectCreate = $Object['create'];
        $propertyIsEnumerable = $objectProto['propertyIsEnumerable'];
        $splice = $arrayProto['splice'];
        $spreadableSymbol = ($Symbol ? $Symbol['isConcatSpreadable'] : null);
        $symIterator = ($Symbol ? $Symbol['iterator'] : null);
        $symToStringTag = ($Symbol ? $Symbol['toStringTag'] : null);
        $defineProperty = (function() {
        try {
            $func = $getNative($Object, 'defineProperty');
            $func([], '', []);
            return $func;
        } catch (\Throwable $e) {}
})();
        $ctxClearTimeout = $context['clearTimeout'] !== $root['clearTimeout'] && $context['clearTimeout'];
        $ctxNow = $Date && $Date['now'] !== $root['Date']['now'] && $Date['now'];
        $ctxSetTimeout = $context['setTimeout'] !== $root['setTimeout'] && $context['setTimeout'];
        $nativeCeil = ceil;
        $nativeFloor = floor;
        $nativeGetSymbols = $Object['getOwnPropertySymbols'];
        $nativeIsBuffer = ($Buffer ? $Buffer['isBuffer'] : null);
        $nativeIsFinite = $context['isFinite'];
        $nativeJoin = $arrayProto['join'];
        $nativeKeys = $overArg(keys, $Object);
        $nativeMax = max;
        $nativeMin = min;
        $nativeNow = $Date['now'];
        $nativeParseInt = $context['parseInt'];
        $nativeRandom = random;
        $nativeReverse = $arrayProto['reverse'];
        $DataView = $getNative($context, 'DataView');
        $Map = $getNative($context, 'Map');
        $Promise = $getNative($context, 'Promise');
        $Set = $getNative($context, 'Set');
        $WeakMap = $getNative($context, 'WeakMap');
        $nativeCreate = $getNative($Object, 'create');
        $metaMap = $WeakMap && new $WeakMap();
        $realNames = [];
        $dataViewCtorString = $toSource($DataView);
        $mapCtorString = $toSource($Map);
        $promiseCtorString = $toSource($Promise);
        $setCtorString = $toSource($Set);
        $weakMapCtorString = $toSource($WeakMap);
        $symbolProto = ($Symbol ? $Symbol['prototype'] : null);
        $symbolValueOf = ($symbolProto ? $symbolProto['valueOf'] : null);
        $symbolToString = ($symbolProto ? $symbolProto['toString'] : null);
        function lodash($value) {
            if ($isObjectLike($value) && !$isArray($value) && !$value instanceof $LazyWrapper) {
                if ($value instanceof $LodashWrapper) {
                    return $value;
                }
                if (call_user_func($hasOwnProperty, $value, '__wrapped__')) {
                    return $wrapperClone($value);
                }
            }
            return new $LodashWrapper($value);
        }
        $baseCreate = (function() {
        function object() {}
        return function($proto) {
        if (!$isObject($proto)) {
            return [];
        }
        if ($objectCreate) {
            return $objectCreate($proto);
        }
        $object['prototype'] = $proto;
        $result = new $object();
        $object['prototype'] = null;
        return $result;
};
})();
        function baseLodash() {}
        function LodashWrapper($value, $chainAll) {
            $this->__wrapped__ = $value;
            $this->__actions__ = [];
            $this->__chain__ = !!$chainAll;
            $this->__index__ = 0;
            $this->__values__ = null;
        }
        $lodash['templateSettings'] = [
            'escape' => $reEscape,
            'evaluate' => $reEvaluate,
            'interpolate' => $reInterpolate,
            'variable' => '',
            'imports' => [
            '_' => $lodash
        ]
        ];
        $lodash['prototype'] = $baseLodash['prototype'];
        $lodash['prototype']['constructor'] = $lodash;
        $LodashWrapper['prototype'] = $baseCreate($baseLodash['prototype']);
        $LodashWrapper['prototype']['constructor'] = $LodashWrapper;
        function LazyWrapper($value) {
            $this->__wrapped__ = $value;
            $this->__actions__ = [];
            $this->__dir__ = 1;
            $this->__filtered__ = false;
            $this->__iteratees__ = [];
            $this->__takeCount__ = $MAX_ARRAY_LENGTH;
            $this->__views__ = [];
        }
        function lazyClone() {
            $result = new $LazyWrapper($this->__wrapped__);
            $result['__actions__'] = $copyArray($this->__actions__);
            $result['__dir__'] = $this->__dir__;
            $result['__filtered__'] = $this->__filtered__;
            $result['__iteratees__'] = $copyArray($this->__iteratees__);
            $result['__takeCount__'] = $this->__takeCount__;
            $result['__views__'] = $copyArray($this->__views__);
            return $result;
        }
        function lazyReverse() {
            if ($this->__filtered__) {
                $result = new $LazyWrapper($this);
                $result['__dir__'] = -1;
                $result['__filtered__'] = true;
            } else {
                $result = $this->clone();
                $result['__dir__'] *= -1;
            }
            return $result;
        }
        function lazyValue() {
            $array = $this->__wrapped__['value']();
            $dir = $this->__dir__;
            $isArr = $isArray($array);
            $isRight = $dir < 0;
            $arrLength = ($isArr ? (is_array($array) ? count($array) : strlen($array)) : 0);
            $view = $getView(0, $arrLength, $this->__views__);
            $start = $view['start'];
            $end = $view['end'];
            $length = $end - $start;
            $index = ($isRight ? $end : $start - 1);
            $iteratees = $this->__iteratees__;
            $iterLength = (is_array($iteratees) ? count($iteratees) : strlen($iteratees));
            $resIndex = 0;
            $takeCount = $nativeMin($length, $this->__takeCount__);
            if (!$isArr || !$isRight && $arrLength == $length && $takeCount == $length) {
                return $baseWrapperValue($array, $this->__actions__);
            }
            $result = [];
            null /* LabeledStatement */;
            return $result;
        }
        $LazyWrapper['prototype'] = $baseCreate($baseLodash['prototype']);
        $LazyWrapper['prototype']['constructor'] = $LazyWrapper;
        function _Hash($entries) {
            $index = -1;
            $length = ($entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries)));
            $this->clear();
            while (++$index < $length) {
                $entry = $entries[$index];
                $this->set($entry[0], $entry[1]);
            }
        }
        function hashClear() {
            $this->__data__ = ($nativeCreate ? $nativeCreate(null) : []);
            $this->size = 0;
        }
        function hashDelete($key) {
            $result = $this->has($key) && (static function() { if (isset($this->__data__[$key])) { unset($this->__data__[$key]); return true; } return true; })();
            $this->size -= ($result ? 1 : 0);
            return $result;
        }
        function hashGet($key) {
            $data = $this->__data__;
            if ($nativeCreate) {
                $result = $data[$key];
                return ($result === $HASH_UNDEFINED ? null : $result);
            }
            return (call_user_func($hasOwnProperty, $data, $key) ? $data[$key] : null);
        }
        function hashHas($key) {
            $data = $this->__data__;
            return ($nativeCreate ? $data[$key] !== null : call_user_func($hasOwnProperty, $data, $key));
        }
        function hashSet($key, $value) {
            $data = $this->__data__;
            $this->size += ($this->has($key) ? 0 : 1);
            $data[$key] = ($nativeCreate && $value === null ? $HASH_UNDEFINED : $value);
            return $this;
        }
        $Hash['prototype']['clear'] = $hashClear;
        $Hash['prototype']['delete'] = $hashDelete;
        $Hash['prototype']['get'] = $hashGet;
        $Hash['prototype']['has'] = $hashHas;
        $Hash['prototype']['set'] = $hashSet;
        function ListCache($entries) {
            $index = -1;
            $length = ($entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries)));
            $this->clear();
            while (++$index < $length) {
                $entry = $entries[$index];
                $this->set($entry[0], $entry[1]);
            }
        }
        function listCacheClear() {
            $this->__data__ = [];
            $this->size = 0;
        }
        function listCacheDelete($key) {
            $data = $this->__data__;
            $index = $assocIndexOf($data, $key);
            if ($index < 0) {
                return false;
            }
            $lastIndex = (is_array($data) ? count($data) : strlen($data)) - 1;
            if ($index == $lastIndex) {
                array_pop($data);
            } else {
                call_user_func($splice, $data, $index, 1);
            }
            --$this->size;
            return true;
        }
        function listCacheGet($key) {
            $data = $this->__data__;
            $index = $assocIndexOf($data, $key);
            return ($index < 0 ? null : $data[$index][1]);
        }
        function listCacheHas($key) {
            return $assocIndexOf($this->__data__, $key) > -1;
        }
        function listCacheSet($key, $value) {
            $data = $this->__data__;
            $index = $assocIndexOf($data, $key);
            if ($index < 0) {
                ++$this->size;
                $data[] = [$key, $value];
            } else {
                $data[$index][1] = $value;
            }
            return $this;
        }
        $ListCache['prototype']['clear'] = $listCacheClear;
        $ListCache['prototype']['delete'] = $listCacheDelete;
        $ListCache['prototype']['get'] = $listCacheGet;
        $ListCache['prototype']['has'] = $listCacheHas;
        $ListCache['prototype']['set'] = $listCacheSet;
        function MapCache($entries) {
            $index = -1;
            $length = ($entries == null ? 0 : (is_array($entries) ? count($entries) : strlen($entries)));
            $this->clear();
            while (++$index < $length) {
                $entry = $entries[$index];
                $this->set($entry[0], $entry[1]);
            }
        }
        function mapCacheClear() {
            $this->size = 0;
            $this->__data__ = [
                'hash' => new $Hash(),
                'map' => new $Map || $ListCache(),
                'string' => new $Hash()
            ];
        }
        function mapCacheDelete($key) {
            $result = $getMapData($this, $key)['delete']($key);
            $this->size -= ($result ? 1 : 0);
            return $result;
        }
        function mapCacheGet($key) {
            return $getMapData($this, $key)['get']($key);
        }
        function mapCacheHas($key) {
            return $getMapData($this, $key)['has']($key);
        }
        function mapCacheSet($key, $value) {
            $data = $getMapData($this, $key);
            $size = $data['size'];
            $data['set']($key, $value);
            $this->size += ($data['size'] == $size ? 0 : 1);
            return $this;
        }
        $MapCache['prototype']['clear'] = $mapCacheClear;
        $MapCache['prototype']['delete'] = $mapCacheDelete;
        $MapCache['prototype']['get'] = $mapCacheGet;
        $MapCache['prototype']['has'] = $mapCacheHas;
        $MapCache['prototype']['set'] = $mapCacheSet;
        function SetCache($values) {
            $index = -1;
            $length = ($values == null ? 0 : (is_array($values) ? count($values) : strlen($values)));
            $this->__data__ = new $MapCache();
            while (++$index < $length) {
                $this->add($values[$index]);
            }
        }
        function setCacheAdd($value) {
            $this->__data__['set']($value, $HASH_UNDEFINED);
            return $this;
        }
        function setCacheHas($value) {
            return $this->__data__['has']($value);
        }
        $SetCache['prototype']['add'] = $SetCache['prototype']['push'] = $setCacheAdd;
        $SetCache['prototype']['has'] = $setCacheHas;
        function Stack($entries) {
            $data = $this->__data__ = new $ListCache($entries);
            $this->size = $data['size'];
        }
        function stackClear() {
            $this->__data__ = new $ListCache();
            $this->size = 0;
        }
        function stackDelete($key) {
            $data = $this->__data__;
            $result = $data['delete']($key);
            $this->size = $data['size'];
            return $result;
        }
        function stackGet($key) {
            return $this->__data__['get']($key);
        }
        function stackHas($key) {
            return $this->__data__['has']($key);
        }
        function stackSet($key, $value) {
            $data = $this->__data__;
            if ($data instanceof $ListCache) {
                $pairs = $data['__data__'];
                if (!$Map || (is_array($pairs) ? count($pairs) : strlen($pairs)) < $LARGE_ARRAY_SIZE - 1) {
                    $pairs[] = [$key, $value];
                    $this->size = ++$data['size'];
                    return $this;
                }
                $data = $this->__data__ = new $MapCache($pairs);
            }
            $data['set']($key, $value);
            $this->size = $data['size'];
            return $this;
        }
        $Stack['prototype']['clear'] = $stackClear;
        $Stack['prototype']['delete'] = $stackDelete;
        $Stack['prototype']['get'] = $stackGet;
        $Stack['prototype']['has'] = $stackHas;
        $Stack['prototype']['set'] = $stackSet;
        function arrayLikeKeys($value, $inherited) {
            $isArr = $isArray($value);
            $isArg = !$isArr && $isArguments($value);
            $isBuff = !$isArr && !$isArg && $isBuffer($value);
            $isType = !$isArr && !$isArg && !$isBuff && $isTypedArray($value);
            $skipIndexes = $isArr || $isArg || $isBuff || $isType;
            $result = ($skipIndexes ? $baseTimes((is_array($value) ? count($value) : strlen($value)), $String) : []);
            $length = (is_array($result) ? count($result) : strlen($result));
            foreach ($value as $key => $__value__) {
                if ($inherited || call_user_func($hasOwnProperty, $value, $key) && !$skipIndexes && $key == 'length' || $isBuff && $key == 'offset' || $key == 'parent' || $isType && $key == 'buffer' || $key == 'byteLength' || $key == 'byteOffset' || $isIndex($key, $length)) {
                    $result[] = $key;
                }
            }
            return $result;
        }
        function arraySample($array) {
            $length = (is_array($array) ? count($array) : strlen($array));
            return ($length ? $array[$baseRandom(0, $length - 1)] : null);
        }
        function arraySampleSize($array, $n) {
            return $shuffleSelf($copyArray($array), $baseClamp($n, 0, (is_array($array) ? count($array) : strlen($array))));
        }
        function arrayShuffle($array) {
            return $shuffleSelf($copyArray($array));
        }
        function assignMergeValue($object, $key, $value) {
            if ($value !== null && !$eq($object[$key], $value) || $value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
                $baseAssignValue($object, $key, $value);
            }
        }
        function assignValue($object, $key, $value) {
            $objValue = $object[$key];
            if (!call_user_func($hasOwnProperty, $object, $key) && $eq($objValue, $value) || $value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
                $baseAssignValue($object, $key, $value);
            }
        }
        function assocIndexOf($array, $key) {
            $length = (is_array($array) ? count($array) : strlen($array));
            while ($length--) {
                if ($eq($array[$length][0], $key)) {
                    return $length;
                }
            }
            return -1;
        }
        function baseAggregator($collection, $setter, $iteratee, $accumulator) {
            $baseEach($collection, function($value, $key, $collection) {
        $setter($accumulator, $value, $iteratee($value), $collection);
});
            return $accumulator;
        }
        function baseAssign($object, $source) {
            return $object && $copyObject($source, $keys($source), $object);
        }
        function baseAssignIn($object, $source) {
            return $object && $copyObject($source, $keysIn($source), $object);
        }
        function baseAssignValue($object, $key, $value) {
            if ($key == '__proto__' && $defineProperty) {
                $defineProperty($object, $key, [
                    'configurable' => true,
                    'enumerable' => true,
                    'value' => $value,
                    'writable' => true
                ]);
            } else {
                $object[$key] = $value;
            }
        }
        function baseAt($object, $paths) {
            $index = -1;
            $length = (is_array($paths) ? count($paths) : strlen($paths));
            $result = array_fill(0, $length, null);
            $skip = $object == null;
            while (++$index < $length) {
                $result[$index] = ($skip ? null : $get($object, $paths[$index]));
            }
            return $result;
        }
        function baseClamp($number, $lower, $upper) {
            if ($number === $number) {
                if ($upper !== null) {
                    $number = ($number <= $upper ? $number : $upper);
                }
                if ($lower !== null) {
                    $number = ($number >= $lower ? $number : $lower);
                }
            }
            return $number;
        }
        function baseClone($value, $bitmask, $customizer, $key, $object, $stack) {
            $result = null;
            $isDeep = $bitmask & $CLONE_DEEP_FLAG;
            $isFlat = $bitmask & $CLONE_FLAT_FLAG;
            $isFull = $bitmask & $CLONE_SYMBOLS_FLAG;
            if ($customizer) {
                $result = ($object ? $customizer($value, $key, $object, $stack) : $customizer($value));
            }
            if ($result !== null) {
                return $result;
            }
            if (!$isObject($value)) {
                return $value;
            }
            $isArr = $isArray($value);
            if ($isArr) {
                $result = $initCloneArray($value);
                if (!$isDeep) {
                    return $copyArray($value, $result);
                }
            } else {
                $tag = $getTag($value);
                $isFunc = $tag == $funcTag || $tag == $genTag;
                if ($isBuffer($value)) {
                    return $cloneBuffer($value, $isDeep);
                }
                if ($tag == $objectTag || $tag == $argsTag || $isFunc && !$object) {
                    $result = ($isFlat || $isFunc ? [] : $initCloneObject($value));
                    if (!$isDeep) {
                        return ($isFlat ? $copySymbolsIn($value, $baseAssignIn($result, $value)) : $copySymbols($value, $baseAssign($result, $value)));
                    }
                } else {
                    if (!$cloneableTags[$tag]) {
                        return ($object ? $value : []);
                    }
                    $result = $initCloneByTag($value, $tag, $isDeep);
                }
            }
            $stack || $stack = new $Stack();
            $stacked = $stack['get']($value);
            if ($stacked) {
                return $stacked;
            }
            $stack['set']($value, $result);
            if ($isSet($value)) {
                $value['forEach'](function($subValue) {
        $result['add']($baseClone($subValue, $bitmask, $customizer, $subValue, $value, $stack));
});
            } else if ($isMap($value)) {
                $value['forEach'](function($subValue, $key) {
        $result['set']($key, $baseClone($subValue, $bitmask, $customizer, $key, $value, $stack));
});
            }
            $keysFunc = ($isFull ? ($isFlat ? $getAllKeysIn : $getAllKeys) : ($isFlat ? $keysIn : $keys));
            $props = ($isArr ? null : $keysFunc($value));
            $arrayEach($props || $value, function($subValue, $key) {
        if ($props) {
            $key = $subValue;
            $subValue = $value[$key];
        }
        $assignValue($result, $key, $baseClone($subValue, $bitmask, $customizer, $key, $value, $stack));
});
            return $result;
        }
        function baseConforms($source) {
            $props = $keys($source);
            return function($object) {
        return $baseConformsTo($object, $source, $props);
};
        }
        function baseConformsTo($object, $source, $props) {
            $length = (is_array($props) ? count($props) : strlen($props));
            if ($object == null) {
                return !$length;
            }
            $object = $Object($object);
            while ($length--) {
                $key = $props[$length];
                $predicate = $source[$key];
                $value = $object[$key];
                if ($value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false) || !$predicate($value)) {
                    return false;
                }
            }
            return true;
        }
        function baseDelay($func, $wait, $args) {
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            return $setTimeout(function() {
        $func['apply'](null, $args);
}, $wait);
        }
        function baseDifference($array, $values, $iteratee, $comparator) {
            $index = -1;
            $includes = $arrayIncludes;
            $isCommon = true;
            $length = (is_array($array) ? count($array) : strlen($array));
            $result = [];
            $valuesLength = (is_array($values) ? count($values) : strlen($values));
            if (!$length) {
                return $result;
            }
            if ($iteratee) {
                $values = $arrayMap($values, $baseUnary($iteratee));
            }
            if ($comparator) {
                $includes = $arrayIncludesWith;
                $isCommon = false;
            } else if ((is_array($values) ? count($values) : strlen($values)) >= $LARGE_ARRAY_SIZE) {
                $includes = $cacheHas;
                $isCommon = false;
                $values = new $SetCache($values);
            }
            null /* LabeledStatement */;
            return $result;
        }
        $baseEach = $createBaseEach($baseForOwn);
        $baseEachRight = $createBaseEach($baseForOwnRight, true);
        function baseEvery($collection, $predicate) {
            $result = true;
            $baseEach($collection, function($value, $index, $collection) {
        $result = !!$predicate($value, $index, $collection);
        return $result;
});
            return $result;
        }
        function baseExtremum($array, $iteratee, $comparator) {
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            while (++$index < $length) {
                $value = $array[$index];
                $current = $iteratee($value);
                if ($current != null && ($computed === null ? $current === $current && !$isSymbol($current) : $comparator($current, $computed))) {
                    $computed = $current;
                    $result = $value;
                }
            }
            return $result;
        }
        function baseFill($array, $value, $start, $end) {
            $length = (is_array($array) ? count($array) : strlen($array));
            $start = $toInteger($start);
            if ($start < 0) {
                $start = (-$start > $length ? 0 : $length + $start);
            }
            $end = ($end === null || $end > $length ? $length : $toInteger($end));
            if ($end < 0) {
                $end += $length;
            }
            $end = ($start > $end ? 0 : $toLength($end));
            while ($start < $end) {
                $array[$start++] = $value;
            }
            return $array;
        }
        function baseFilter($collection, $predicate) {
            $result = [];
            $baseEach($collection, function($value, $index, $collection) {
        if ($predicate($value, $index, $collection)) {
            $result[] = $value;
        }
});
            return $result;
        }
        function baseFlatten($array, $depth, $predicate, $isStrict, $result) {
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            $predicate || $predicate = $isFlattenable;
            $result || $result = [];
            while (++$index < $length) {
                $value = $array[$index];
                if ($depth > 0 && $predicate($value)) {
                    if ($depth > 1) {
                        $baseFlatten($value, $depth - 1, $predicate, $isStrict, $result);
                    } else {
                        $arrayPush($result, $value);
                    }
                } else if (!$isStrict) {
                    $result[(is_array($result) ? count($result) : strlen($result))] = $value;
                }
            }
            return $result;
        }
        $baseFor = $createBaseFor();
        $baseForRight = $createBaseFor(true);
        function baseForOwn($object, $iteratee) {
            return $object && $baseFor($object, $iteratee, $keys);
        }
        function baseForOwnRight($object, $iteratee) {
            return $object && $baseForRight($object, $iteratee, $keys);
        }
        function baseFunctions($object, $props) {
            return $arrayFilter($props, function($key) {
        return $isFunction($object[$key]);
});
        }
        function baseGet($object, $path) {
            $path = $castPath($path, $object);
            $index = 0;
            $length = (is_array($path) ? count($path) : strlen($path));
            while ($object != null && $index < $length) {
                $object = $object[$toKey($path[$index++])];
            }
            return ($index && $index == $length ? $object : null);
        }
        function baseGetAllKeys($object, $keysFunc, $symbolsFunc) {
            $result = $keysFunc($object);
            return ($isArray($object) ? $result : $arrayPush($result, $symbolsFunc($object)));
        }
        function baseGetTag($value) {
            if ($value == null) {
                return ($value === null ? $undefinedTag : $nullTag);
            }
            return ($symToStringTag && (is_array($Object($value)) ? (array_key_exists($symToStringTag, $Object($value)) || in_array($symToStringTag, $Object($value))) : false) ? $getRawTag($value) : $objectToString($value));
        }
        function baseGt($value, $other) {
            return $value > $other;
        }
        function baseHas($object, $key) {
            return $object != null && call_user_func($hasOwnProperty, $object, $key);
        }
        function baseHasIn($object, $key) {
            return $object != null && (is_array($Object($object)) ? (array_key_exists($key, $Object($object)) || in_array($key, $Object($object))) : false);
        }
        function baseInRange($number, $start, $end) {
            return $number >= $nativeMin($start, $end) && $number < $nativeMax($start, $end);
        }
        function baseIntersection($arrays, $iteratee, $comparator) {
            $includes = ($comparator ? $arrayIncludesWith : $arrayIncludes);
            $length = (is_array($arrays[0]) ? count($arrays[0]) : strlen($arrays[0]));
            $othLength = (is_array($arrays) ? count($arrays) : strlen($arrays));
            $othIndex = $othLength;
            $caches = array_fill(0, $othLength, null);
            $maxLength = INF;
            $result = [];
            while ($othIndex--) {
                $array = $arrays[$othIndex];
                if ($othIndex && $iteratee) {
                    $array = $arrayMap($array, $baseUnary($iteratee));
                }
                $maxLength = $nativeMin((is_array($array) ? count($array) : strlen($array)), $maxLength);
                $caches[$othIndex] = (!$comparator && $iteratee || $length >= 120 && (is_array($array) ? count($array) : strlen($array)) >= 120 ? new $SetCache($othIndex && $array) : null);
            }
            $array = $arrays[0];
            $index = -1;
            $seen = $caches[0];
            null /* LabeledStatement */;
            return $result;
        }
        function baseInverter($object, $setter, $iteratee, $accumulator) {
            $baseForOwn($object, function($value, $key, $object) {
        $setter($accumulator, $iteratee($value), $key, $object);
});
            return $accumulator;
        }
        function baseInvoke($object, $path, $args) {
            $path = $castPath($path, $object);
            $object = $parent($object, $path);
            $func = ($object == null ? $object : $object[$toKey($last($path))]);
            return ($func == null ? null : $apply($func, $object, $args));
        }
        function baseIsArguments($value) {
            return $isObjectLike($value) && $baseGetTag($value) == $argsTag;
        }
        function baseIsArrayBuffer($value) {
            return $isObjectLike($value) && $baseGetTag($value) == $arrayBufferTag;
        }
        function baseIsDate($value) {
            return $isObjectLike($value) && $baseGetTag($value) == $dateTag;
        }
        function baseIsEqual($value, $other, $bitmask, $customizer, $stack) {
            if ($value === $other) {
                return true;
            }
            if ($value == null || $other == null || !$isObjectLike($value) && !$isObjectLike($other)) {
                return $value !== $value && $other !== $other;
            }
            return $baseIsEqualDeep($value, $other, $bitmask, $customizer, $baseIsEqual, $stack);
        }
        function baseIsEqualDeep($object, $other, $bitmask, $customizer, $equalFunc, $stack) {
            $objIsArr = $isArray($object);
            $othIsArr = $isArray($other);
            $objTag = ($objIsArr ? $arrayTag : $getTag($object));
            $othTag = ($othIsArr ? $arrayTag : $getTag($other));
            $objTag = ($objTag == $argsTag ? $objectTag : $objTag);
            $othTag = ($othTag == $argsTag ? $objectTag : $othTag);
            $objIsObj = $objTag == $objectTag;
            $othIsObj = $othTag == $objectTag;
            $isSameTag = $objTag == $othTag;
            if ($isSameTag && $isBuffer($object)) {
                if (!$isBuffer($other)) {
                    return false;
                }
                $objIsArr = true;
                $objIsObj = false;
            }
            if ($isSameTag && !$objIsObj) {
                $stack || $stack = new $Stack();
                return ($objIsArr || $isTypedArray($object) ? $equalArrays($object, $other, $bitmask, $customizer, $equalFunc, $stack) : $equalByTag($object, $other, $objTag, $bitmask, $customizer, $equalFunc, $stack));
            }
            if (!$bitmask & $COMPARE_PARTIAL_FLAG) {
                $objIsWrapped = $objIsObj && call_user_func($hasOwnProperty, $object, '__wrapped__');
                $othIsWrapped = $othIsObj && call_user_func($hasOwnProperty, $other, '__wrapped__');
                if ($objIsWrapped || $othIsWrapped) {
                    $objUnwrapped = ($objIsWrapped ? $object['value']() : $object);
                    $othUnwrapped = ($othIsWrapped ? $other['value']() : $other);
                    $stack || $stack = new $Stack();
                    return $equalFunc($objUnwrapped, $othUnwrapped, $bitmask, $customizer, $stack);
                }
            }
            if (!$isSameTag) {
                return false;
            }
            $stack || $stack = new $Stack();
            return $equalObjects($object, $other, $bitmask, $customizer, $equalFunc, $stack);
        }
        function baseIsMap($value) {
            return $isObjectLike($value) && $getTag($value) == $mapTag;
        }
        function baseIsMatch($object, $source, $matchData, $customizer) {
            $index = (is_array($matchData) ? count($matchData) : strlen($matchData));
            $length = $index;
            $noCustomizer = !$customizer;
            if ($object == null) {
                return !$length;
            }
            $object = $Object($object);
            while ($index--) {
                $data = $matchData[$index];
                if (($noCustomizer && $data[2] ? $data[1] !== $object[$data[0]] : !(is_array($object) ? (array_key_exists($data[0], $object) || in_array($data[0], $object)) : false))) {
                    return false;
                }
            }
            while (++$index < $length) {
                $data = $matchData[$index];
                $key = $data[0];
                $objValue = $object[$key];
                $srcValue = $data[1];
                if ($noCustomizer && $data[2]) {
                    if ($objValue === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
                        return false;
                    }
                } else {
                    $stack = new $Stack();
                    if ($customizer) {
                        $result = $customizer($objValue, $srcValue, $key, $object, $source, $stack);
                    }
                    if (!($result === null ? $baseIsEqual($srcValue, $objValue, $COMPARE_PARTIAL_FLAG | $COMPARE_UNORDERED_FLAG, $customizer, $stack) : $result)) {
                        return false;
                    }
                }
            }
            return true;
        }
        function baseIsNative($value) {
            if (!$isObject($value) || $isMasked($value)) {
                return false;
            }
            $pattern = ($isFunction($value) ? $reIsNative : $reIsHostCtor);
            return preg_match($toSource($value), $pattern);
        }
        function baseIsRegExp($value) {
            return $isObjectLike($value) && $baseGetTag($value) == $regexpTag;
        }
        function baseIsSet($value) {
            return $isObjectLike($value) && $getTag($value) == $setTag;
        }
        function baseIsTypedArray($value) {
            return $isObjectLike($value) && $isLength((is_array($value) ? count($value) : strlen($value))) && !!$typedArrayTags[$baseGetTag($value)];
        }
        function baseIteratee($value) {
            if (is_callable($value)) {
                return $value;
            }
            if ($value == null) {
                return $identity;
            }
            if ((is_object($value) || is_array($value))) {
                return ($isArray($value) ? $baseMatchesProperty($value[0], $value[1]) : $baseMatches($value));
            }
            return $property($value);
        }
        function baseKeys($object) {
            if (!$isPrototype($object)) {
                return $nativeKeys($object);
            }
            $result = [];
            foreach ($Object($object) as $key => $__value__) {
                if (call_user_func($hasOwnProperty, $object, $key) && $key != 'constructor') {
                    $result[] = $key;
                }
            }
            return $result;
        }
        function baseKeysIn($object) {
            if (!$isObject($object)) {
                return $nativeKeysIn($object);
            }
            $isProto = $isPrototype($object);
            $result = [];
            foreach ($object as $key => $__value__) {
                if (!$key == 'constructor' && $isProto || !call_user_func($hasOwnProperty, $object, $key)) {
                    $result[] = $key;
                }
            }
            return $result;
        }
        function baseLt($value, $other) {
            return $value < $other;
        }
        function baseMap($collection, $iteratee) {
            $index = -1;
            $result = ($isArrayLike($collection) ? array_fill(0, (is_array($collection) ? count($collection) : strlen($collection)), null) : []);
            $baseEach($collection, function($value, $key, $collection) {
        $result[++$index] = $iteratee($value, $key, $collection);
});
            return $result;
        }
        function baseMatches($source) {
            $matchData = $getMatchData($source);
            if ((is_array($matchData) ? count($matchData) : strlen($matchData)) == 1 && $matchData[0][2]) {
                return $matchesStrictComparable($matchData[0][0], $matchData[0][1]);
            }
            return function($object) {
        return $object === $source || $baseIsMatch($object, $source, $matchData);
};
        }
        function baseMatchesProperty($path, $srcValue) {
            if ($isKey($path) && $isStrictComparable($srcValue)) {
                return $matchesStrictComparable($toKey($path), $srcValue);
            }
            return function($object) {
        $objValue = $get($object, $path);
        return ($objValue === null && $objValue === $srcValue ? $hasIn($object, $path) : $baseIsEqual($srcValue, $objValue, $COMPARE_PARTIAL_FLAG | $COMPARE_UNORDERED_FLAG));
};
        }
        function baseMerge($object, $source, $srcIndex, $customizer, $stack) {
            if ($object === $source) {
                return;
            }
            $baseFor($source, function($srcValue, $key) {
        $stack || $stack = new $Stack();
        if ($isObject($srcValue)) {
            $baseMergeDeep($object, $source, $key, $srcIndex, $baseMerge, $customizer, $stack);
        } else {
            $newValue = ($customizer ? $customizer($safeGet($object, $key), $srcValue, $key + '', $object, $source, $stack) : null);
            if ($newValue === null) {
                $newValue = $srcValue;
            }
            $assignMergeValue($object, $key, $newValue);
        }
}, $keysIn);
        }
        function baseMergeDeep($object, $source, $key, $srcIndex, $mergeFunc, $customizer, $stack) {
            $objValue = $safeGet($object, $key);
            $srcValue = $safeGet($source, $key);
            $stacked = $stack['get']($srcValue);
            if ($stacked) {
                $assignMergeValue($object, $key, $stacked);
                return;
            }
            $newValue = ($customizer ? $customizer($objValue, $srcValue, $key + '', $object, $source, $stack) : null);
            $isCommon = $newValue === null;
            if ($isCommon) {
                $isArr = $isArray($srcValue);
                $isBuff = !$isArr && $isBuffer($srcValue);
                $isTyped = !$isArr && !$isBuff && $isTypedArray($srcValue);
                $newValue = $srcValue;
                if ($isArr || $isBuff || $isTyped) {
                    if ($isArray($objValue)) {
                        $newValue = $objValue;
                    } else if ($isArrayLikeObject($objValue)) {
                        $newValue = $copyArray($objValue);
                    } else if ($isBuff) {
                        $isCommon = false;
                        $newValue = $cloneBuffer($srcValue, true);
                    } else if ($isTyped) {
                        $isCommon = false;
                        $newValue = $cloneTypedArray($srcValue, true);
                    } else {
                        $newValue = [];
                    }
                } else if ($isPlainObject($srcValue) || $isArguments($srcValue)) {
                    $newValue = $objValue;
                    if ($isArguments($objValue)) {
                        $newValue = $toPlainObject($objValue);
                    } else if (!$isObject($objValue) || $isFunction($objValue)) {
                        $newValue = $initCloneObject($srcValue);
                    }
                } else {
                    $isCommon = false;
                }
            }
            if ($isCommon) {
                $stack['set']($srcValue, $newValue);
                $mergeFunc($newValue, $srcValue, $srcIndex, $customizer, $stack);
                $stack['delete']($srcValue);
            }
            $assignMergeValue($object, $key, $newValue);
        }
        function baseNth($array, $n) {
            $length = (is_array($array) ? count($array) : strlen($array));
            if (!$length) {
                return;
            }
            $n += ($n < 0 ? $length : 0);
            return ($isIndex($n, $length) ? $array[$n] : null);
        }
        function baseOrderBy($collection, $iteratees, $orders) {
            if ((is_array($iteratees) ? count($iteratees) : strlen($iteratees))) {
                $iteratees = $arrayMap($iteratees, function($iteratee) {
        if ($isArray($iteratee)) {
            return function($value) {
        return $baseGet($value, ((is_array($iteratee) ? count($iteratee) : strlen($iteratee)) === 1 ? $iteratee[0] : $iteratee));
};
        }
        return $iteratee;
});
            } else {
                $iteratees = [$identity];
            }
            $index = -1;
            $iteratees = $arrayMap($iteratees, $baseUnary($getIteratee()));
            $result = $baseMap($collection, function($value, $key, $collection) {
        $criteria = $arrayMap($iteratees, function($iteratee) {
        return $iteratee($value);
});
        return [
            'criteria' => $criteria,
            'index' => ++$index,
            'value' => $value
        ];
});
            return $baseSortBy($result, function($object, $other) {
        return $compareMultiple($object, $other, $orders);
});
        }
        function basePick($object, $paths) {
            return $basePickBy($object, $paths, function($value, $path) {
        return $hasIn($object, $path);
});
        }
        function basePickBy($object, $paths, $predicate) {
            $index = -1;
            $length = (is_array($paths) ? count($paths) : strlen($paths));
            $result = [];
            while (++$index < $length) {
                $path = $paths[$index];
                $value = $baseGet($object, $path);
                if ($predicate($value, $path)) {
                    $baseSet($result, $castPath($path, $object), $value);
                }
            }
            return $result;
        }
        function basePropertyDeep($path) {
            return function($object) {
        return $baseGet($object, $path);
};
        }
        function basePullAll($array, $values, $iteratee, $comparator) {
            $indexOf = ($comparator ? $baseIndexOfWith : $baseIndexOf);
            $index = -1;
            $length = (is_array($values) ? count($values) : strlen($values));
            $seen = $array;
            if ($array === $values) {
                $values = $copyArray($values);
            }
            if ($iteratee) {
                $seen = $arrayMap($array, $baseUnary($iteratee));
            }
            while (++$index < $length) {
                $fromIndex = 0;
                $value = $values[$index];
                $computed = ($iteratee ? $iteratee($value) : $value);
                while ($fromIndex = $indexOf($seen, $computed, $fromIndex, $comparator) > -1) {
                    if ($seen !== $array) {
                        call_user_func($splice, $seen, $fromIndex, 1);
                    }
                    call_user_func($splice, $array, $fromIndex, 1);
                }
            }
            return $array;
        }
        function basePullAt($array, $indexes) {
            $length = ($array ? (is_array($indexes) ? count($indexes) : strlen($indexes)) : 0);
            $lastIndex = $length - 1;
            while ($length--) {
                $index = $indexes[$length];
                if ($length == $lastIndex || $index !== $previous) {
                    $previous = $index;
                    if ($isIndex($index)) {
                        call_user_func($splice, $array, $index, 1);
                    } else {
                        $baseUnset($array, $index);
                    }
                }
            }
            return $array;
        }
        function baseRandom($lower, $upper) {
            return $lower + $nativeFloor($nativeRandom() * $upper - $lower + 1);
        }
        function baseRange($start, $end, $step, $fromRight) {
            $index = -1;
            $length = $nativeMax($nativeCeil($end - $start / $step || 1), 0);
            $result = array_fill(0, $length, null);
            while ($length--) {
                $result[($fromRight ? $length : ++$index)] = $start;
                $start += $step;
            }
            return $result;
        }
        function baseRepeat($string, $n) {
            $result = '';
            if (!$string || $n < 1 || $n > $MAX_SAFE_INTEGER) {
                return $result;
            }
            null /* DoWhileStatement */;
            return $result;
        }
        function baseRest($func, $start) {
            return $setToString($overRest($func, $start, $identity), $func + '');
        }
        function baseSample($collection) {
            return $arraySample($values($collection));
        }
        function baseSampleSize($collection, $n) {
            $array = $values($collection);
            return $shuffleSelf($array, $baseClamp($n, 0, (is_array($array) ? count($array) : strlen($array))));
        }
        function baseSet($object, $path, $value, $customizer) {
            if (!$isObject($object)) {
                return $object;
            }
            $path = $castPath($path, $object);
            $index = -1;
            $length = (is_array($path) ? count($path) : strlen($path));
            $lastIndex = $length - 1;
            $nested = $object;
            while ($nested != null && ++$index < $length) {
                $key = $toKey($path[$index]);
                $newValue = $value;
                if ($key === '__proto__' || $key === 'constructor' || $key === 'prototype') {
                    return $object;
                }
                if ($index != $lastIndex) {
                    $objValue = $nested[$key];
                    $newValue = ($customizer ? $customizer($objValue, $key, $nested) : null);
                    if ($newValue === null) {
                        $newValue = ($isObject($objValue) ? $objValue : ($isIndex($path[$index + 1]) ? [] : []));
                    }
                }
                $assignValue($nested, $key, $newValue);
                $nested = $nested[$key];
            }
            return $object;
        }
        $baseSetData = (!$metaMap ? $identity : function($func, $data) {
        $metaMap['set']($func, $data);
        return $func;
});
        $baseSetToString = (!$defineProperty ? $identity : function($func, $string) {
        return $defineProperty($func, 'toString', [
            'configurable' => true,
            'enumerable' => false,
            'value' => $constant($string),
            'writable' => true
        ]);
});
        function baseShuffle($collection) {
            return $shuffleSelf($values($collection));
        }
        function baseSlice($array, $start, $end) {
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            if ($start < 0) {
                $start = (-$start > $length ? 0 : $length + $start);
            }
            $end = ($end > $length ? $length : $end);
            if ($end < 0) {
                $end += $length;
            }
            $length = ($start > $end ? 0 : $end - $start >> 0);
            $start >>= 0;
            $result = array_fill(0, $length, null);
            while (++$index < $length) {
                $result[$index] = $array[$index + $start];
            }
            return $result;
        }
        function baseSome($collection, $predicate) {
            $result = null;
            $baseEach($collection, function($value, $index, $collection) {
        $result = $predicate($value, $index, $collection);
        return !$result;
});
            return !!$result;
        }
        function baseSortedIndex($array, $value, $retHighest) {
            $low = 0;
            $high = ($array == null ? $low : (is_array($array) ? count($array) : strlen($array)));
            if (is_numeric($value) && $value === $value && $high <= $HALF_MAX_ARRAY_LENGTH) {
                while ($low < $high) {
                    $mid = $low + $high >> 1;
                    $computed = $array[$mid];
                    if ($computed !== null && !$isSymbol($computed) && ($retHighest ? $computed <= $value : $computed < $value)) {
                        $low = $mid + 1;
                    } else {
                        $high = $mid;
                    }
                }
                return $high;
            }
            return $baseSortedIndexBy($array, $value, $identity, $retHighest);
        }
        function baseSortedIndexBy($array, $value, $iteratee, $retHighest) {
            $low = 0;
            $high = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if ($high === 0) {
                return 0;
            }
            $value = $iteratee($value);
            $valIsNaN = $value !== $value;
            $valIsNull = $value === null;
            $valIsSymbol = $isSymbol($value);
            $valIsUndefined = $value === null;
            while ($low < $high) {
                $mid = $nativeFloor($low + $high / 2);
                $computed = $iteratee($array[$mid]);
                $othIsDefined = $computed !== null;
                $othIsNull = $computed === null;
                $othIsReflexive = $computed === $computed;
                $othIsSymbol = $isSymbol($computed);
                if ($valIsNaN) {
                    $setLow = $retHighest || $othIsReflexive;
                } else if ($valIsUndefined) {
                    $setLow = $othIsReflexive && $retHighest || $othIsDefined;
                } else if ($valIsNull) {
                    $setLow = $othIsReflexive && $othIsDefined && $retHighest || !$othIsNull;
                } else if ($valIsSymbol) {
                    $setLow = $othIsReflexive && $othIsDefined && !$othIsNull && $retHighest || !$othIsSymbol;
                } else if ($othIsNull || $othIsSymbol) {
                    $setLow = false;
                } else {
                    $setLow = ($retHighest ? $computed <= $value : $computed < $value);
                }
                if ($setLow) {
                    $low = $mid + 1;
                } else {
                    $high = $mid;
                }
            }
            return $nativeMin($high, $MAX_ARRAY_INDEX);
        }
        function baseSortedUniq($array, $iteratee) {
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            $resIndex = 0;
            $result = [];
            while (++$index < $length) {
                $value = $array[$index];
                $computed = ($iteratee ? $iteratee($value) : $value);
                if (!$index || !$eq($computed, $seen)) {
                    $seen = $computed;
                    $result[$resIndex++] = ($value === 0 ? 0 : $value);
                }
            }
            return $result;
        }
        function baseToNumber($value) {
            if (is_numeric($value)) {
                return $value;
            }
            if ($isSymbol($value)) {
                return $NAN;
            }
            return +$value;
        }
        function baseToString($value) {
            if (is_string($value)) {
                return $value;
            }
            if ($isArray($value)) {
                return $arrayMap($value, $baseToString) + '';
            }
            if ($isSymbol($value)) {
                return ($symbolToString ? call_user_func($symbolToString, $value) : '');
            }
            $result = $value + '';
            return ($result == '0' && 1 / $value == -$INFINITY ? '-0' : $result);
        }
        function baseUniq($array, $iteratee, $comparator) {
            $index = -1;
            $includes = $arrayIncludes;
            $length = (is_array($array) ? count($array) : strlen($array));
            $isCommon = true;
            $result = [];
            $seen = $result;
            if ($comparator) {
                $isCommon = false;
                $includes = $arrayIncludesWith;
            } else if ($length >= $LARGE_ARRAY_SIZE) {
                $set = ($iteratee ? null : $createSet($array));
                if ($set) {
                    return $setToArray($set);
                }
                $isCommon = false;
                $includes = $cacheHas;
                $seen = new $SetCache();
            } else {
                $seen = ($iteratee ? [] : $result);
            }
            null /* LabeledStatement */;
            return $result;
        }
        function baseUnset($object, $path) {
            $path = $castPath($path, $object);
            $index = -1;
            $length = (is_array($path) ? count($path) : strlen($path));
            if (!$length) {
                return true;
            }
            while (++$index < $length) {
                $key = $toKey($path[$index]);
                if ($key === '__proto__' && !call_user_func($hasOwnProperty, $object, '__proto__')) {
                    return false;
                }
                if ($key === 'constructor' || $key === 'prototype' && $index < $length - 1) {
                    return false;
                }
            }
            $obj = $parent($object, $path);
            return $obj == null || (static function() { if (isset($obj[$toKey($last($path))])) { unset($obj[$toKey($last($path))]); return true; } return true; })();
        }
        function baseUpdate($object, $path, $updater, $customizer) {
            return $baseSet($object, $path, $updater($baseGet($object, $path)), $customizer);
        }
        function baseWhile($array, $predicate, $isDrop, $fromRight) {
            $length = (is_array($array) ? count($array) : strlen($array));
            $index = ($fromRight ? $length : -1);
            while (($fromRight ? $index-- : ++$index < $length) && $predicate($array[$index], $index, $array)) {}
            return ($isDrop ? $baseSlice($array, ($fromRight ? 0 : $index), ($fromRight ? $index + 1 : $length)) : $baseSlice($array, ($fromRight ? $index + 1 : 0), ($fromRight ? $length : $index)));
        }
        function baseWrapperValue($value, $actions) {
            $result = $value;
            if ($result instanceof $LazyWrapper) {
                $result = $result['value']();
            }
            return $arrayReduce($actions, function($result, $action) {
        return $action['func']['apply']($action['thisArg'], $arrayPush([$result], $action['args']));
}, $result);
        }
        function baseXor($arrays, $iteratee, $comparator) {
            $length = (is_array($arrays) ? count($arrays) : strlen($arrays));
            if ($length < 2) {
                return ($length ? $baseUniq($arrays[0]) : []);
            }
            $index = -1;
            $result = array_fill(0, $length, null);
            while (++$index < $length) {
                $array = $arrays[$index];
                $othIndex = -1;
                while (++$othIndex < $length) {
                    if ($othIndex != $index) {
                        $result[$index] = $baseDifference($result[$index] || $array, $arrays[$othIndex], $iteratee, $comparator);
                    }
                }
            }
            return $baseUniq($baseFlatten($result, 1), $iteratee, $comparator);
        }
        function baseZipObject($props, $values, $assignFunc) {
            $index = -1;
            $length = (is_array($props) ? count($props) : strlen($props));
            $valsLength = (is_array($values) ? count($values) : strlen($values));
            $result = [];
            while (++$index < $length) {
                $value = ($index < $valsLength ? $values[$index] : null);
                $assignFunc($result, $props[$index], $value);
            }
            return $result;
        }
        function castArrayLikeObject($value) {
            return ($isArrayLikeObject($value) ? $value : []);
        }
        function castFunction($value) {
            return (is_callable($value) ? $value : $identity);
        }
        function castPath($value, $object) {
            if ($isArray($value)) {
                return $value;
            }
            return ($isKey($value, $object) ? [$value] : $stringToPath($toString($value)));
        }
        $castRest = $baseRest;
        function castSlice($array, $start, $end) {
            $length = (is_array($array) ? count($array) : strlen($array));
            $end = ($end === null ? $length : $end);
            return (!$start && $end >= $length ? $array : $baseSlice($array, $start, $end));
        }
        $clearTimeout = $ctxClearTimeout || function($id) {
        return $root['clearTimeout']($id);
};
        function cloneBuffer($buffer, $isDeep) {
            if ($isDeep) {
                return array_slice($buffer);
            }
            $length = (is_array($buffer) ? count($buffer) : strlen($buffer));
            $result = ($allocUnsafe ? $allocUnsafe($length) : new $buffer['constructor']($length));
            $buffer['copy']($result);
            return $result;
        }
        function cloneArrayBuffer($arrayBuffer) {
            $result = new $arrayBuffer['constructor']($arrayBuffer['byteLength']);
            new $Uint8Array($result)['set'](new $Uint8Array($arrayBuffer));
            return $result;
        }
        function cloneDataView($dataView, $isDeep) {
            $buffer = ($isDeep ? $cloneArrayBuffer($dataView['buffer']) : $dataView['buffer']);
            return new $dataView['constructor']($buffer, $dataView['byteOffset'], $dataView['byteLength']);
        }
        function cloneRegExp($regexp) {
            $result = new $regexp['constructor']($regexp['source'], preg_match($reFlags, $regexp));
            $result['lastIndex'] = $regexp['lastIndex'];
            return $result;
        }
        function cloneSymbol($symbol) {
            return ($symbolValueOf ? $Object(call_user_func($symbolValueOf, $symbol)) : []);
        }
        function cloneTypedArray($typedArray, $isDeep) {
            $buffer = ($isDeep ? $cloneArrayBuffer($typedArray['buffer']) : $typedArray['buffer']);
            return new $typedArray['constructor']($buffer, $typedArray['byteOffset'], (is_array($typedArray) ? count($typedArray) : strlen($typedArray)));
        }
        function compareAscending($value, $other) {
            if ($value !== $other) {
                $valIsDefined = $value !== null;
                $valIsNull = $value === null;
                $valIsReflexive = $value === $value;
                $valIsSymbol = $isSymbol($value);
                $othIsDefined = $other !== null;
                $othIsNull = $other === null;
                $othIsReflexive = $other === $other;
                $othIsSymbol = $isSymbol($other);
                if (!$othIsNull && !$othIsSymbol && !$valIsSymbol && $value > $other || $valIsSymbol && $othIsDefined && $othIsReflexive && !$othIsNull && !$othIsSymbol || $valIsNull && $othIsDefined && $othIsReflexive || !$valIsDefined && $othIsReflexive || !$valIsReflexive) {
                    return 1;
                }
                if (!$valIsNull && !$valIsSymbol && !$othIsSymbol && $value < $other || $othIsSymbol && $valIsDefined && $valIsReflexive && !$valIsNull && !$valIsSymbol || $othIsNull && $valIsDefined && $valIsReflexive || !$othIsDefined && $valIsReflexive || !$othIsReflexive) {
                    return -1;
                }
            }
            return 0;
        }
        function compareMultiple($object, $other, $orders) {
            $index = -1;
            $objCriteria = $object['criteria'];
            $othCriteria = $other['criteria'];
            $length = (is_array($objCriteria) ? count($objCriteria) : strlen($objCriteria));
            $ordersLength = (is_array($orders) ? count($orders) : strlen($orders));
            while (++$index < $length) {
                $result = $compareAscending($objCriteria[$index], $othCriteria[$index]);
                if ($result) {
                    if ($index >= $ordersLength) {
                        return $result;
                    }
                    $order = $orders[$index];
                    return $result * ($order == 'desc' ? -1 : 1);
                }
            }
            return $object['index'] - $other['index'];
        }
        function composeArgs($args, $partials, $holders, $isCurried) {
            $argsIndex = -1;
            $argsLength = (is_array($args) ? count($args) : strlen($args));
            $holdersLength = (is_array($holders) ? count($holders) : strlen($holders));
            $leftIndex = -1;
            $leftLength = (is_array($partials) ? count($partials) : strlen($partials));
            $rangeLength = $nativeMax($argsLength - $holdersLength, 0);
            $result = array_fill(0, $leftLength + $rangeLength, null);
            $isUncurried = !$isCurried;
            while (++$leftIndex < $leftLength) {
                $result[$leftIndex] = $partials[$leftIndex];
            }
            while (++$argsIndex < $holdersLength) {
                if ($isUncurried || $argsIndex < $argsLength) {
                    $result[$holders[$argsIndex]] = $args[$argsIndex];
                }
            }
            while ($rangeLength--) {
                $result[$leftIndex++] = $args[$argsIndex++];
            }
            return $result;
        }
        function composeArgsRight($args, $partials, $holders, $isCurried) {
            $argsIndex = -1;
            $argsLength = (is_array($args) ? count($args) : strlen($args));
            $holdersIndex = -1;
            $holdersLength = (is_array($holders) ? count($holders) : strlen($holders));
            $rightIndex = -1;
            $rightLength = (is_array($partials) ? count($partials) : strlen($partials));
            $rangeLength = $nativeMax($argsLength - $holdersLength, 0);
            $result = array_fill(0, $rangeLength + $rightLength, null);
            $isUncurried = !$isCurried;
            while (++$argsIndex < $rangeLength) {
                $result[$argsIndex] = $args[$argsIndex];
            }
            $offset = $argsIndex;
            while (++$rightIndex < $rightLength) {
                $result[$offset + $rightIndex] = $partials[$rightIndex];
            }
            while (++$holdersIndex < $holdersLength) {
                if ($isUncurried || $argsIndex < $argsLength) {
                    $result[$offset + $holders[$holdersIndex]] = $args[$argsIndex++];
                }
            }
            return $result;
        }
        function copyArray($source, $array) {
            $index = -1;
            $length = (is_array($source) ? count($source) : strlen($source));
            $array || $array = array_fill(0, $length, null);
            while (++$index < $length) {
                $array[$index] = $source[$index];
            }
            return $array;
        }
        function copyObject($source, $props, $object, $customizer) {
            $isNew = !$object;
            $object || $object = [];
            $index = -1;
            $length = (is_array($props) ? count($props) : strlen($props));
            while (++$index < $length) {
                $key = $props[$index];
                $newValue = ($customizer ? $customizer($object[$key], $source[$key], $key, $object, $source) : null);
                if ($newValue === null) {
                    $newValue = $source[$key];
                }
                if ($isNew) {
                    $baseAssignValue($object, $key, $newValue);
                } else {
                    $assignValue($object, $key, $newValue);
                }
            }
            return $object;
        }
        function copySymbols($source, $object) {
            return $copyObject($source, $getSymbols($source), $object);
        }
        function copySymbolsIn($source, $object) {
            return $copyObject($source, $getSymbolsIn($source), $object);
        }
        function createAggregator($setter, $initializer) {
            return function($collection, $iteratee) {
        $func = ($isArray($collection) ? $arrayAggregator : $baseAggregator);
        $accumulator = ($initializer ? $initializer() : []);
        return $func($collection, $setter, $getIteratee($iteratee, 2), $accumulator);
};
        }
        function createAssigner($assigner) {
            return $baseRest(function($object, $sources) {
        $index = -1;
        $length = (is_array($sources) ? count($sources) : strlen($sources));
        $customizer = ($length > 1 ? $sources[$length - 1] : null);
        $guard = ($length > 2 ? $sources[2] : null);
        $customizer = ((is_array($assigner) ? count($assigner) : strlen($assigner)) > 3 && is_callable($customizer) ? (static function() { $length--; return $customizer; })() : null);
        if ($guard && $isIterateeCall($sources[0], $sources[1], $guard)) {
            $customizer = ($length < 3 ? null : $customizer);
            $length = 1;
        }
        $object = $Object($object);
        while (++$index < $length) {
            $source = $sources[$index];
            if ($source) {
                $assigner($object, $source, $index, $customizer);
            }
        }
        return $object;
});
        }
        function createBaseEach($eachFunc, $fromRight) {
            return function($collection, $iteratee) {
        if ($collection == null) {
            return $collection;
        }
        if (!$isArrayLike($collection)) {
            return $eachFunc($collection, $iteratee);
        }
        $length = (is_array($collection) ? count($collection) : strlen($collection));
        $index = ($fromRight ? $length : -1);
        $iterable = $Object($collection);
        while (($fromRight ? $index-- : ++$index < $length)) {
            if ($iteratee($iterable[$index], $index, $iterable) === false) {
                break;
            }
        }
        return $collection;
};
        }
        function createBaseFor($fromRight) {
            return function($object, $iteratee, $keysFunc) {
        $index = -1;
        $iterable = $Object($object);
        $props = $keysFunc($object);
        $length = (is_array($props) ? count($props) : strlen($props));
        while ($length--) {
            $key = $props[($fromRight ? $length : ++$index)];
            if ($iteratee($iterable[$key], $key, $iterable) === false) {
                break;
            }
        }
        return $object;
};
        }
        function createBind($func, $bitmask, $thisArg) {
            $isBind = $bitmask & $WRAP_BIND_FLAG;
            $Ctor = $createCtor($func);
            function wrapper() {
                $fn = ($this && $this !== $root && $this instanceof $wrapper ? $Ctor : $func);
                return $fn['apply'](($isBind ? $thisArg : $this), $arguments);
            }
            return $wrapper;
        }
        function createCaseFirst($methodName) {
            return function($string) {
        $string = $toString($string);
        $strSymbols = ($hasUnicode($string) ? $stringToArray($string) : null);
        $chr = ($strSymbols ? $strSymbols[0] : $string['charAt'](0));
        $trailing = ($strSymbols ? implode('', $castSlice($strSymbols, 1)) : array_slice(1, $string));
        return $chr[$methodName]() + $trailing;
};
        }
        function createCompounder($callback) {
            return function($string) {
        return $arrayReduce($words(str_replace($reApos, '', $deburr($string))), $callback, '');
};
        }
        function createCtor($Ctor) {
            return function() {
        $args = $arguments;
        switch ((is_array($args) ? count($args) : strlen($args))) {
            case 0:
                return new $Ctor();
            case 1:
                return new $Ctor($args[0]);
            case 2:
                return new $Ctor($args[0], $args[1]);
            case 3:
                return new $Ctor($args[0], $args[1], $args[2]);
            case 4:
                return new $Ctor($args[0], $args[1], $args[2], $args[3]);
            case 5:
                return new $Ctor($args[0], $args[1], $args[2], $args[3], $args[4]);
            case 6:
                return new $Ctor($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]);
            case 7:
                return new $Ctor($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6]);
        }
        $thisBinding = $baseCreate($Ctor['prototype']);
        $result = $Ctor['apply']($thisBinding, $args);
        return ($isObject($result) ? $result : $thisBinding);
};
        }
        function createCurry($func, $bitmask, $arity) {
            $Ctor = $createCtor($func);
            function wrapper() {
                $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
                $args = array_fill(0, $length, null);
                $index = $length;
                $placeholder = $getHolder($wrapper);
                while ($index--) {
                    $args[$index] = $arguments[$index];
                }
                $holders = ($length < 3 && $args[0] !== $placeholder && $args[$length - 1] !== $placeholder ? [] : $replaceHolders($args, $placeholder));
                $length -= (is_array($holders) ? count($holders) : strlen($holders));
                if ($length < $arity) {
                    return $createRecurry($func, $bitmask, $createHybrid, $wrapper['placeholder'], null, $args, $holders, null, null, $arity - $length);
                }
                $fn = ($this && $this !== $root && $this instanceof $wrapper ? $Ctor : $func);
                return $apply($fn, $this, $args);
            }
            return $wrapper;
        }
        function createFind($findIndexFunc) {
            return function($collection, $predicate, $fromIndex) {
        $iterable = $Object($collection);
        if (!$isArrayLike($collection)) {
            $iteratee = $getIteratee($predicate, 3);
            $collection = $keys($collection);
            $predicate = function($key) {
        return $iteratee($iterable[$key], $key, $iterable);
};
        }
        $index = $findIndexFunc($collection, $predicate, $fromIndex);
        return ($index > -1 ? $iterable[($iteratee ? $collection[$index] : $index)] : null);
};
        }
        function createFlow($fromRight) {
            return $flatRest(function($funcs) {
        $length = (is_array($funcs) ? count($funcs) : strlen($funcs));
        $index = $length;
        $prereq = $LodashWrapper['prototype']['thru'];
        if ($fromRight) {
            array_reverse($funcs);
        }
        while ($index--) {
            $func = $funcs[$index];
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            if ($prereq && !$wrapper && $getFuncName($func) == 'wrapper') {
                $wrapper = new $LodashWrapper([], true);
            }
        }
        $index = ($wrapper ? $index : $length);
        while (++$index < $length) {
            $func = $funcs[$index];
            $funcName = $getFuncName($func);
            $data = ($funcName == 'wrapper' ? $getData($func) : null);
            if ($data && $isLaziable($data[0]) && $data[1] == $WRAP_ARY_FLAG | $WRAP_CURRY_FLAG | $WRAP_PARTIAL_FLAG | $WRAP_REARG_FLAG && !(is_array($data[4]) ? count($data[4]) : strlen($data[4])) && $data[9] == 1) {
                $wrapper = $wrapper[$getFuncName($data[0])]['apply']($wrapper, $data[3]);
            } else {
                $wrapper = ((is_array($func) ? count($func) : strlen($func)) == 1 && $isLaziable($func) ? $wrapper[$funcName]() : $wrapper['thru']($func));
            }
        }
        return function() {
        $args = $arguments;
        $value = $args[0];
        if ($wrapper && (is_array($args) ? count($args) : strlen($args)) == 1 && $isArray($value)) {
            return $wrapper['plant']($value)['value']();
        }
        $index = 0;
        $result = ($length ? $funcs[$index]['apply']($this, $args) : $value);
        while (++$index < $length) {
            $result = call_user_func($funcs[$index], $this, $result);
        }
        return $result;
};
});
        }
        function createHybrid($func, $bitmask, $thisArg, $partials, $holders, $partialsRight, $holdersRight, $argPos, $ary, $arity) {
            $isAry = $bitmask & $WRAP_ARY_FLAG;
            $isBind = $bitmask & $WRAP_BIND_FLAG;
            $isBindKey = $bitmask & $WRAP_BIND_KEY_FLAG;
            $isCurried = $bitmask & $WRAP_CURRY_FLAG | $WRAP_CURRY_RIGHT_FLAG;
            $isFlip = $bitmask & $WRAP_FLIP_FLAG;
            $Ctor = ($isBindKey ? null : $createCtor($func));
            function wrapper() {
                $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
                $args = array_fill(0, $length, null);
                $index = $length;
                while ($index--) {
                    $args[$index] = $arguments[$index];
                }
                if ($isCurried) {
                    $placeholder = $getHolder($wrapper);
                    $holdersCount = $countHolders($args, $placeholder);
                }
                if ($partials) {
                    $args = $composeArgs($args, $partials, $holders, $isCurried);
                }
                if ($partialsRight) {
                    $args = $composeArgsRight($args, $partialsRight, $holdersRight, $isCurried);
                }
                $length -= $holdersCount;
                if ($isCurried && $length < $arity) {
                    $newHolders = $replaceHolders($args, $placeholder);
                    return $createRecurry($func, $bitmask, $createHybrid, $wrapper['placeholder'], $thisArg, $args, $newHolders, $argPos, $ary, $arity - $length);
                }
                $thisBinding = ($isBind ? $thisArg : $this);
                $fn = ($isBindKey ? $thisBinding[$func] : $func);
                $length = (is_array($args) ? count($args) : strlen($args));
                if ($argPos) {
                    $args = $reorder($args, $argPos);
                } else if ($isFlip && $length > 1) {
                    array_reverse($args);
                }
                if ($isAry && $ary < $length) {
                    (is_array($args) ? array_splice($args, 0, $ary) : substr($args, 0, $ary));
                }
                if ($this && $this !== $root && $this instanceof $wrapper) {
                    $fn = $Ctor || $createCtor($fn);
                }
                return $fn['apply']($thisBinding, $args);
            }
            return $wrapper;
        }
        function createInverter($setter, $toIteratee) {
            return function($object, $iteratee) {
        return $baseInverter($object, $setter, $toIteratee($iteratee), []);
};
        }
        function createMathOperation($operator, $defaultValue) {
            return function($value, $other) {
        $result = null;
        if ($value === null && $other === null) {
            return $defaultValue;
        }
        if ($value !== null) {
            $result = $value;
        }
        if ($other !== null) {
            if ($result === null) {
                return $other;
            }
            if (is_string($value) || is_string($other)) {
                $value = $baseToString($value);
                $other = $baseToString($other);
            } else {
                $value = $baseToNumber($value);
                $other = $baseToNumber($other);
            }
            $result = $operator($value, $other);
        }
        return $result;
};
        }
        function createOver($arrayFunc) {
            return $flatRest(function($iteratees) {
        $iteratees = $arrayMap($iteratees, $baseUnary($getIteratee()));
        return $baseRest(function($args) {
        $thisArg = $this;
        return $arrayFunc($iteratees, function($iteratee) {
        return $apply($iteratee, $thisArg, $args);
});
});
});
        }
        function createPadding($length, $chars) {
            $chars = ($chars === null ? ' ' : $baseToString($chars));
            $charsLength = (is_array($chars) ? count($chars) : strlen($chars));
            if ($charsLength < 2) {
                return ($charsLength ? $baseRepeat($chars, $length) : $chars);
            }
            $result = $baseRepeat($chars, $nativeCeil($length / $stringSize($chars)));
            return ($hasUnicode($chars) ? implode('', $castSlice($stringToArray($result), 0, $length)) : array_slice(0, $length, $result));
        }
        function createPartial($func, $bitmask, $thisArg, $partials) {
            $isBind = $bitmask & $WRAP_BIND_FLAG;
            $Ctor = $createCtor($func);
            function wrapper() {
                $argsIndex = -1;
                $argsLength = (is_array($arguments) ? count($arguments) : strlen($arguments));
                $leftIndex = -1;
                $leftLength = (is_array($partials) ? count($partials) : strlen($partials));
                $args = array_fill(0, $leftLength + $argsLength, null);
                $fn = ($this && $this !== $root && $this instanceof $wrapper ? $Ctor : $func);
                while (++$leftIndex < $leftLength) {
                    $args[$leftIndex] = $partials[$leftIndex];
                }
                while ($argsLength--) {
                    $args[$leftIndex++] = $arguments[++$argsIndex];
                }
                return $apply($fn, ($isBind ? $thisArg : $this), $args);
            }
            return $wrapper;
        }
        function createRange($fromRight) {
            return function($start, $end, $step) {
        if ($step && !is_numeric($step) && $isIterateeCall($start, $end, $step)) {
            $end = $step = null;
        }
        $start = $toFinite($start);
        if ($end === null) {
            $end = $start;
            $start = 0;
        } else {
            $end = $toFinite($end);
        }
        $step = ($step === null ? ($start < $end ? 1 : -1) : $toFinite($step));
        return $baseRange($start, $end, $step, $fromRight);
};
        }
        function createRelationalOperation($operator) {
            return function($value, $other) {
        if (!is_string($value) && is_string($other)) {
            $value = $toNumber($value);
            $other = $toNumber($other);
        }
        return $operator($value, $other);
};
        }
        function createRecurry($func, $bitmask, $wrapFunc, $placeholder, $thisArg, $partials, $holders, $argPos, $ary, $arity) {
            $isCurry = $bitmask & $WRAP_CURRY_FLAG;
            $newHolders = ($isCurry ? $holders : null);
            $newHoldersRight = ($isCurry ? null : $holders);
            $newPartials = ($isCurry ? $partials : null);
            $newPartialsRight = ($isCurry ? null : $partials);
            $bitmask |= ($isCurry ? $WRAP_PARTIAL_FLAG : $WRAP_PARTIAL_RIGHT_FLAG);
            $bitmask &= ~($isCurry ? $WRAP_PARTIAL_RIGHT_FLAG : $WRAP_PARTIAL_FLAG);
            if (!$bitmask & $WRAP_CURRY_BOUND_FLAG) {
                $bitmask &= ~$WRAP_BIND_FLAG | $WRAP_BIND_KEY_FLAG;
            }
            $newData = [$func, $bitmask, $thisArg, $newPartials, $newHolders, $newPartialsRight, $newHoldersRight, $argPos, $ary, $arity];
            $result = $wrapFunc['apply'](null, $newData);
            if ($isLaziable($func)) {
                $setData($result, $newData);
            }
            $result['placeholder'] = $placeholder;
            return $setWrapToString($result, $func, $bitmask);
        }
        function createRound($methodName) {
            $func = $Math[$methodName];
            return function($number, $precision) {
        $number = $toNumber($number);
        $precision = ($precision == null ? 0 : $nativeMin($toInteger($precision), 292));
        if ($precision && $nativeIsFinite($number)) {
            $pair = explode('e', $toString($number) + 'e');
            $value = $func($pair[0] + 'e' + +$pair[1] + $precision);
            $pair = explode('e', $toString($value) + 'e');
            return +$pair[0] + 'e' + +$pair[1] - $precision;
        }
        return $func($number);
};
        }
        $createSet = (!$Set && 1 / $setToArray(new $Set([null, -0]))[1] == $INFINITY ? $noop : function($values) {
        return new $Set($values);
});
        function createToPairs($keysFunc) {
            return function($object) {
        $tag = $getTag($object);
        if ($tag == $mapTag) {
            return $mapToArray($object);
        }
        if ($tag == $setTag) {
            return $setToPairs($object);
        }
        return $baseToPairs($object, $keysFunc($object));
};
        }
        function createWrap($func, $bitmask, $thisArg, $partials, $holders, $argPos, $ary, $arity) {
            $isBindKey = $bitmask & $WRAP_BIND_KEY_FLAG;
            if (!$isBindKey && !is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $length = ($partials ? (is_array($partials) ? count($partials) : strlen($partials)) : 0);
            if (!$length) {
                $bitmask &= ~$WRAP_PARTIAL_FLAG | $WRAP_PARTIAL_RIGHT_FLAG;
                $partials = $holders = null;
            }
            $ary = ($ary === null ? $ary : $nativeMax($toInteger($ary), 0));
            $arity = ($arity === null ? $arity : $toInteger($arity));
            $length -= ($holders ? (is_array($holders) ? count($holders) : strlen($holders)) : 0);
            if ($bitmask & $WRAP_PARTIAL_RIGHT_FLAG) {
                $partialsRight = $partials;
                $holdersRight = $holders;
                $partials = $holders = null;
            }
            $data = ($isBindKey ? null : $getData($func));
            $newData = [$func, $bitmask, $thisArg, $partials, $holders, $partialsRight, $holdersRight, $argPos, $ary, $arity];
            if ($data) {
                $mergeData($newData, $data);
            }
            $func = $newData[0];
            $bitmask = $newData[1];
            $thisArg = $newData[2];
            $partials = $newData[3];
            $holders = $newData[4];
            $arity = $newData[9] = ($newData[9] === null ? ($isBindKey ? 0 : (is_array($func) ? count($func) : strlen($func))) : $nativeMax($newData[9] - $length, 0));
            if (!$arity && $bitmask & $WRAP_CURRY_FLAG | $WRAP_CURRY_RIGHT_FLAG) {
                $bitmask &= ~$WRAP_CURRY_FLAG | $WRAP_CURRY_RIGHT_FLAG;
            }
            if (!$bitmask || $bitmask == $WRAP_BIND_FLAG) {
                $result = $createBind($func, $bitmask, $thisArg);
            } else if ($bitmask == $WRAP_CURRY_FLAG || $bitmask == $WRAP_CURRY_RIGHT_FLAG) {
                $result = $createCurry($func, $bitmask, $arity);
            } else if ($bitmask == $WRAP_PARTIAL_FLAG || $bitmask == $WRAP_BIND_FLAG | $WRAP_PARTIAL_FLAG && !(is_array($holders) ? count($holders) : strlen($holders))) {
                $result = $createPartial($func, $bitmask, $thisArg, $partials);
            } else {
                $result = $createHybrid['apply'](null, $newData);
            }
            $setter = ($data ? $baseSetData : $setData);
            return $setWrapToString($setter($result, $newData), $func, $bitmask);
        }
        function customDefaultsAssignIn($objValue, $srcValue, $key, $object) {
            if ($objValue === null || $eq($objValue, $objectProto[$key]) && !call_user_func($hasOwnProperty, $object, $key)) {
                return $srcValue;
            }
            return $objValue;
        }
        function customDefaultsMerge($objValue, $srcValue, $key, $object, $source, $stack) {
            if ($isObject($objValue) && $isObject($srcValue)) {
                $stack['set']($srcValue, $objValue);
                $baseMerge($objValue, $srcValue, null, $customDefaultsMerge, $stack);
                $stack['delete']($srcValue);
            }
            return $objValue;
        }
        function customOmitClone($value) {
            return ($isPlainObject($value) ? null : $value);
        }
        function equalArrays($array, $other, $bitmask, $customizer, $equalFunc, $stack) {
            $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
            $arrLength = (is_array($array) ? count($array) : strlen($array));
            $othLength = (is_array($other) ? count($other) : strlen($other));
            if ($arrLength != $othLength && !$isPartial && $othLength > $arrLength) {
                return false;
            }
            $arrStacked = $stack['get']($array);
            $othStacked = $stack['get']($other);
            if ($arrStacked && $othStacked) {
                return $arrStacked == $other && $othStacked == $array;
            }
            $index = -1;
            $result = true;
            $seen = ($bitmask & $COMPARE_UNORDERED_FLAG ? new $SetCache() : null);
            $stack['set']($array, $other);
            $stack['set']($other, $array);
            while (++$index < $arrLength) {
                $arrValue = $array[$index];
                $othValue = $other[$index];
                if ($customizer) {
                    $compared = ($isPartial ? $customizer($othValue, $arrValue, $index, $other, $array, $stack) : $customizer($arrValue, $othValue, $index, $array, $other, $stack));
                }
                if ($compared !== null) {
                    if ($compared) {
                        continue;
                    }
                    $result = false;
                    break;
                }
                if ($seen) {
                    if (!$arraySome($other, function($othValue, $othIndex) {
        if (!$cacheHas($seen, $othIndex) && $arrValue === $othValue || $equalFunc($arrValue, $othValue, $bitmask, $customizer, $stack)) {
            return $seen[] = $othIndex;
        }
})) {
                        $result = false;
                        break;
                    }
                } else if (!$arrValue === $othValue || $equalFunc($arrValue, $othValue, $bitmask, $customizer, $stack)) {
                    $result = false;
                    break;
                }
            }
            $stack['delete']($array);
            $stack['delete']($other);
            return $result;
        }
        function equalByTag($object, $other, $tag, $bitmask, $customizer, $equalFunc, $stack) {
            switch ($tag) {
                case $dataViewTag:
                    if ($object['byteLength'] != $other['byteLength'] || $object['byteOffset'] != $other['byteOffset']) {
                        return false;
                    }
                    $object = $object['buffer'];
                    $other = $other['buffer'];
                case $arrayBufferTag:
                    if ($object['byteLength'] != $other['byteLength'] || !$equalFunc(new $Uint8Array($object), new $Uint8Array($other))) {
                        return false;
                    }
                    return true;
                case $boolTag:
                case $dateTag:
                case $numberTag:
                    return $eq(+$object, +$other);
                case $errorTag:
                    return $object['name'] == $other['name'] && $object['message'] == $other['message'];
                case $regexpTag:
                case $stringTag:
                    return $object == $other + '';
                case $mapTag:
                    $convert = $mapToArray;
                case $setTag:
                    $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
                    $convert || $convert = $setToArray;
                    if ($object['size'] != $other['size'] && !$isPartial) {
                        return false;
                    }
                    $stacked = $stack['get']($object);
                    if ($stacked) {
                        return $stacked == $other;
                    }
                    $bitmask |= $COMPARE_UNORDERED_FLAG;
                    $stack['set']($object, $other);
                    $result = $equalArrays($convert($object), $convert($other), $bitmask, $customizer, $equalFunc, $stack);
                    $stack['delete']($object);
                    return $result;
                case $symbolTag:
                    if ($symbolValueOf) {
                        return call_user_func($symbolValueOf, $object) == call_user_func($symbolValueOf, $other);
                    }
            }
            return false;
        }
        function equalObjects($object, $other, $bitmask, $customizer, $equalFunc, $stack) {
            $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
            $objProps = $getAllKeys($object);
            $objLength = (is_array($objProps) ? count($objProps) : strlen($objProps));
            $othProps = $getAllKeys($other);
            $othLength = (is_array($othProps) ? count($othProps) : strlen($othProps));
            if ($objLength != $othLength && !$isPartial) {
                return false;
            }
            $index = $objLength;
            while ($index--) {
                $key = $objProps[$index];
                if (!($isPartial ? (is_array($other) ? (array_key_exists($key, $other) || in_array($key, $other)) : false) : call_user_func($hasOwnProperty, $other, $key))) {
                    return false;
                }
            }
            $objStacked = $stack['get']($object);
            $othStacked = $stack['get']($other);
            if ($objStacked && $othStacked) {
                return $objStacked == $other && $othStacked == $object;
            }
            $result = true;
            $stack['set']($object, $other);
            $stack['set']($other, $object);
            $skipCtor = $isPartial;
            while (++$index < $objLength) {
                $key = $objProps[$index];
                $objValue = $object[$key];
                $othValue = $other[$key];
                if ($customizer) {
                    $compared = ($isPartial ? $customizer($othValue, $objValue, $key, $other, $object, $stack) : $customizer($objValue, $othValue, $key, $object, $other, $stack));
                }
                if (!($compared === null ? $objValue === $othValue || $equalFunc($objValue, $othValue, $bitmask, $customizer, $stack) : $compared)) {
                    $result = false;
                    break;
                }
                $skipCtor || $skipCtor = $key == 'constructor';
            }
            if ($result && !$skipCtor) {
                $objCtor = $object['constructor'];
                $othCtor = $other['constructor'];
                if ($objCtor != $othCtor && (is_array($object) ? (array_key_exists('constructor', $object) || in_array('constructor', $object)) : false) && (is_array($other) ? (array_key_exists('constructor', $other) || in_array('constructor', $other)) : false) && !is_callable($objCtor) && $objCtor instanceof $objCtor && is_callable($othCtor) && $othCtor instanceof $othCtor) {
                    $result = false;
                }
            }
            $stack['delete']($object);
            $stack['delete']($other);
            return $result;
        }
        function flatRest($func) {
            return $setToString($overRest($func, null, $flatten), $func + '');
        }
        function getAllKeys($object) {
            return $baseGetAllKeys($object, $keys, $getSymbols);
        }
        function getAllKeysIn($object) {
            return $baseGetAllKeys($object, $keysIn, $getSymbolsIn);
        }
        $getData = (!$metaMap ? $noop : function($func) {
        return $metaMap['get']($func);
});
        function getFuncName($func) {
            $result = $func['name'] + '';
            $array = $realNames[$result];
            $length = (call_user_func($hasOwnProperty, $realNames, $result) ? (is_array($array) ? count($array) : strlen($array)) : 0);
            while ($length--) {
                $data = $array[$length];
                $otherFunc = $data['func'];
                if ($otherFunc == null || $otherFunc == $func) {
                    return $data['name'];
                }
            }
            return $result;
        }
        function getHolder($func) {
            $object = (call_user_func($hasOwnProperty, $lodash, 'placeholder') ? $lodash : $func);
            return $object['placeholder'];
        }
        function getIteratee() {
            $result = $lodash['iteratee'] || $iteratee;
            $result = ($result === $iteratee ? $baseIteratee : $result);
            return ((is_array($arguments) ? count($arguments) : strlen($arguments)) ? $result($arguments[0], $arguments[1]) : $result);
        }
        function getMapData($map, $key) {
            $data = $map['__data__'];
            return ($isKeyable($key) ? $data[(is_string($key) ? 'string' : 'hash')] : $data['map']);
        }
        function getMatchData($object) {
            $result = $keys($object);
            $length = (is_array($result) ? count($result) : strlen($result));
            while ($length--) {
                $key = $result[$length];
                $value = $object[$key];
                $result[$length] = [$key, $value, $isStrictComparable($value)];
            }
            return $result;
        }
        function getNative($object, $key) {
            $value = $getValue($object, $key);
            return ($baseIsNative($value) ? $value : null);
        }
        function getRawTag($value) {
            $isOwn = call_user_func($hasOwnProperty, $value, $symToStringTag);
            $tag = $value[$symToStringTag];
            try {
                $value[$symToStringTag] = null;
                $unmasked = true;
            } catch (\Throwable $e) {}
            $result = call_user_func($nativeObjectToString, $value);
            if ($unmasked) {
                if ($isOwn) {
                    $value[$symToStringTag] = $tag;
                } else {
                    (static function() { if (isset($value[$symToStringTag])) { unset($value[$symToStringTag]); return true; } return true; })();
                }
            }
            return $result;
        }
        $getSymbols = (!$nativeGetSymbols ? $stubArray : function($object) {
        if ($object == null) {
            return [];
        }
        $object = $Object($object);
        return $arrayFilter($nativeGetSymbols($object), function($symbol) {
        return call_user_func($propertyIsEnumerable, $object, $symbol);
});
});
        $getSymbolsIn = (!$nativeGetSymbols ? $stubArray : function($object) {
        $result = [];
        while ($object) {
            $arrayPush($result, $getSymbols($object));
            $object = $getPrototype($object);
        }
        return $result;
});
        $getTag = $baseGetTag;
        if ($DataView && $getTag(new $DataView(new $ArrayBuffer(1))) != $dataViewTag || $Map && $getTag(new $Map()) != $mapTag || $Promise && $getTag($Promise['resolve']()) != $promiseTag || $Set && $getTag(new $Set()) != $setTag || $WeakMap && $getTag(new $WeakMap()) != $weakMapTag) {
            $getTag = function($value) {
        $result = $baseGetTag($value);
        $Ctor = ($result == $objectTag ? $value['constructor'] : null);
        $ctorString = ($Ctor ? $toSource($Ctor) : '');
        if ($ctorString) {
            switch ($ctorString) {
                case $dataViewCtorString:
                    return $dataViewTag;
                case $mapCtorString:
                    return $mapTag;
                case $promiseCtorString:
                    return $promiseTag;
                case $setCtorString:
                    return $setTag;
                case $weakMapCtorString:
                    return $weakMapTag;
            }
        }
        return $result;
};
        }
        function getView($start, $end, $transforms) {
            $index = -1;
            $length = (is_array($transforms) ? count($transforms) : strlen($transforms));
            while (++$index < $length) {
                $data = $transforms[$index];
                $size = $data['size'];
                switch ($data['type']) {
                    case 'drop':
                        $start += $size;
                        break;
                    case 'dropRight':
                        $end -= $size;
                        break;
                    case 'take':
                        $end = $nativeMin($end, $start + $size);
                        break;
                    case 'takeRight':
                        $start = $nativeMax($start, $end - $size);
                        break;
                }
            }
            return [
                'start' => $start,
                'end' => $end
            ];
        }
        function getWrapDetails($source) {
            $match = $source['match']($reWrapDetails);
            return ($match ? explode($reSplitDetails, $match[1]) : []);
        }
        function hasPath($object, $path, $hasFunc) {
            $path = $castPath($path, $object);
            $index = -1;
            $length = (is_array($path) ? count($path) : strlen($path));
            $result = false;
            while (++$index < $length) {
                $key = $toKey($path[$index]);
                if (!$result = $object != null && $hasFunc($object, $key)) {
                    break;
                }
                $object = $object[$key];
            }
            if ($result || ++$index != $length) {
                return $result;
            }
            $length = ($object == null ? 0 : (is_array($object) ? count($object) : strlen($object)));
            return !!$length && $isLength($length) && $isIndex($key, $length) && $isArray($object) || $isArguments($object);
        }
        function initCloneArray($array) {
            $length = (is_array($array) ? count($array) : strlen($array));
            $result = new $array['constructor']($length);
            if ($length && is_string($array[0]) && call_user_func($hasOwnProperty, $array, 'index')) {
                $result['index'] = $array['index'];
                $result['input'] = $array['input'];
            }
            return $result;
        }
        function initCloneObject($object) {
            return (is_callable($object['constructor']) && !$isPrototype($object) ? $baseCreate($getPrototype($object)) : []);
        }
        function initCloneByTag($object, $tag, $isDeep) {
            $Ctor = $object['constructor'];
            switch ($tag) {
                case $arrayBufferTag:
                    return $cloneArrayBuffer($object);
                case $boolTag:
                case $dateTag:
                    return new $Ctor(+$object);
                case $dataViewTag:
                    return $cloneDataView($object, $isDeep);
                case $float32Tag:
                case $float64Tag:
                case $int8Tag:
                case $int16Tag:
                case $int32Tag:
                case $uint8Tag:
                case $uint8ClampedTag:
                case $uint16Tag:
                case $uint32Tag:
                    return $cloneTypedArray($object, $isDeep);
                case $mapTag:
                    return new $Ctor();
                case $numberTag:
                case $stringTag:
                    return new $Ctor($object);
                case $regexpTag:
                    return $cloneRegExp($object);
                case $setTag:
                    return new $Ctor();
                case $symbolTag:
                    return $cloneSymbol($object);
            }
        }
        function insertWrapDetails($source, $details) {
            $length = (is_array($details) ? count($details) : strlen($details));
            if (!$length) {
                return $source;
            }
            $lastIndex = $length - 1;
            $details[$lastIndex] = ($length > 1 ? '& ' : '') + $details[$lastIndex];
            $details = implode(($length > 2 ? ', ' : ' '), $details);
            return str_replace($reWrapComment, '{\n/* [wrapped with ' + $details + '] */\n', $source);
        }
        function isFlattenable($value) {
            return $isArray($value) || $isArguments($value) || !!$spreadableSymbol && $value && $value[$spreadableSymbol];
        }
        function isIndex($value, $length) {
            $type = $value;
            $length = ($length == null ? $MAX_SAFE_INTEGER : $length);
            return !!$length && $type == 'number' || $type != 'symbol' && preg_match($value, $reIsUint) && $value > -1 && $value % 1 == 0 && $value < $length;
        }
        function isIterateeCall($value, $index, $object) {
            if (!$isObject($object)) {
                return false;
            }
            $type = $index;
            if (($type == 'number' ? $isArrayLike($object) && $isIndex($index, (is_array($object) ? count($object) : strlen($object))) : $type == 'string' && (is_array($object) ? (array_key_exists($index, $object) || in_array($index, $object)) : false))) {
                return $eq($object[$index], $value);
            }
            return false;
        }
        function isKey($value, $object) {
            if ($isArray($value)) {
                return false;
            }
            $type = $value;
            if ($type == 'number' || $type == 'symbol' || $type == 'boolean' || $value == null || $isSymbol($value)) {
                return true;
            }
            return preg_match($value, $reIsPlainProp) || !preg_match($value, $reIsDeepProp) || $object != null && (is_array($Object($object)) ? (array_key_exists($value, $Object($object)) || in_array($value, $Object($object))) : false);
        }
        function isKeyable($value) {
            $type = $value;
            return ($type == 'string' || $type == 'number' || $type == 'symbol' || $type == 'boolean' ? $value !== '__proto__' : $value === null);
        }
        function isLaziable($func) {
            $funcName = $getFuncName($func);
            $other = $lodash[$funcName];
            if (!is_callable($other) || !(is_array($LazyWrapper['prototype']) ? (array_key_exists($funcName, $LazyWrapper['prototype']) || in_array($funcName, $LazyWrapper['prototype'])) : false)) {
                return false;
            }
            if ($func === $other) {
                return true;
            }
            $data = $getData($other);
            return !!$data && $func === $data[0];
        }
        function isMasked($func) {
            return !!$maskSrcKey && (is_array($func) ? (array_key_exists($maskSrcKey, $func) || in_array($maskSrcKey, $func)) : false);
        }
        $isMaskable = ($coreJsData ? $isFunction : $stubFalse);
        function isPrototype($value) {
            $Ctor = $value && $value['constructor'];
            $proto = is_callable($Ctor) && $Ctor['prototype'] || $objectProto;
            return $value === $proto;
        }
        function isStrictComparable($value) {
            return $value === $value && !$isObject($value);
        }
        function matchesStrictComparable($key, $srcValue) {
            return function($object) {
        if ($object == null) {
            return false;
        }
        return $object[$key] === $srcValue && $srcValue !== null || (is_array($Object($object)) ? (array_key_exists($key, $Object($object)) || in_array($key, $Object($object))) : false);
};
        }
        function memoizeCapped($func) {
            $result = $memoize($func, function($key) {
        if ($cache['size'] === $MAX_MEMOIZE_SIZE) {
            $cache['clear']();
        }
        return $key;
});
            $cache = $result['cache'];
            return $result;
        }
        function mergeData($data, $source) {
            $bitmask = $data[1];
            $srcBitmask = $source[1];
            $newBitmask = $bitmask | $srcBitmask;
            $isCommon = $newBitmask < $WRAP_BIND_FLAG | $WRAP_BIND_KEY_FLAG | $WRAP_ARY_FLAG;
            $isCombo = $srcBitmask == $WRAP_ARY_FLAG && $bitmask == $WRAP_CURRY_FLAG || $srcBitmask == $WRAP_ARY_FLAG && $bitmask == $WRAP_REARG_FLAG && (is_array($data[7]) ? count($data[7]) : strlen($data[7])) <= $source[8] || $srcBitmask == $WRAP_ARY_FLAG | $WRAP_REARG_FLAG && (is_array($source[7]) ? count($source[7]) : strlen($source[7])) <= $source[8] && $bitmask == $WRAP_CURRY_FLAG;
            if (!$isCommon || $isCombo) {
                return $data;
            }
            if ($srcBitmask & $WRAP_BIND_FLAG) {
                $data[2] = $source[2];
                $newBitmask |= ($bitmask & $WRAP_BIND_FLAG ? 0 : $WRAP_CURRY_BOUND_FLAG);
            }
            $value = $source[3];
            if ($value) {
                $partials = $data[3];
                $data[3] = ($partials ? $composeArgs($partials, $value, $source[4]) : $value);
                $data[4] = ($partials ? $replaceHolders($data[3], $PLACEHOLDER) : $source[4]);
            }
            $value = $source[5];
            if ($value) {
                $partials = $data[5];
                $data[5] = ($partials ? $composeArgsRight($partials, $value, $source[6]) : $value);
                $data[6] = ($partials ? $replaceHolders($data[5], $PLACEHOLDER) : $source[6]);
            }
            $value = $source[7];
            if ($value) {
                $data[7] = $value;
            }
            if ($srcBitmask & $WRAP_ARY_FLAG) {
                $data[8] = ($data[8] == null ? $source[8] : $nativeMin($data[8], $source[8]));
            }
            if ($data[9] == null) {
                $data[9] = $source[9];
            }
            $data[0] = $source[0];
            $data[1] = $newBitmask;
            return $data;
        }
        function nativeKeysIn($object) {
            $result = [];
            if ($object != null) {
                foreach ($Object($object) as $key => $__value__) {
                    $result[] = $key;
                }
            }
            return $result;
        }
        function objectToString($value) {
            return call_user_func($nativeObjectToString, $value);
        }
        function overRest($func, $start, $transform) {
            $start = $nativeMax(($start === null ? (is_array($func) ? count($func) : strlen($func)) - 1 : $start), 0);
            return function() {
        $args = $arguments;
        $index = -1;
        $length = $nativeMax((is_array($args) ? count($args) : strlen($args)) - $start, 0);
        $array = array_fill(0, $length, null);
        while (++$index < $length) {
            $array[$index] = $args[$start + $index];
        }
        $index = -1;
        $otherArgs = array_fill(0, $start + 1, null);
        while (++$index < $start) {
            $otherArgs[$index] = $args[$index];
        }
        $otherArgs[$start] = $transform($array);
        return $apply($func, $this, $otherArgs);
};
        }
        function parent($object, $path) {
            return ((is_array($path) ? count($path) : strlen($path)) < 2 ? $object : $baseGet($object, $baseSlice($path, 0, -1)));
        }
        function reorder($array, $indexes) {
            $arrLength = (is_array($array) ? count($array) : strlen($array));
            $length = $nativeMin((is_array($indexes) ? count($indexes) : strlen($indexes)), $arrLength);
            $oldArray = $copyArray($array);
            while ($length--) {
                $index = $indexes[$length];
                $array[$length] = ($isIndex($index, $arrLength) ? $oldArray[$index] : null);
            }
            return $array;
        }
        function safeGet($object, $key) {
            if ($key === 'constructor' && is_callable($object[$key])) {
                return;
            }
            if ($key == '__proto__') {
                return;
            }
            return $object[$key];
        }
        $setData = $shortOut($baseSetData);
        $setTimeout = $ctxSetTimeout || function($func, $wait) {
        return $root['setTimeout']($func, $wait);
};
        $setToString = $shortOut($baseSetToString);
        function setWrapToString($wrapper, $reference, $bitmask) {
            $source = $reference + '';
            return $setToString($wrapper, $insertWrapDetails($source, $updateWrapDetails($getWrapDetails($source), $bitmask)));
        }
        function shortOut($func) {
            $count = 0;
            $lastCalled = 0;
            return function() {
        $stamp = $nativeNow();
        $remaining = $HOT_SPAN - $stamp - $lastCalled;
        $lastCalled = $stamp;
        if ($remaining > 0) {
            if (++$count >= $HOT_COUNT) {
                return $arguments[0];
            }
        } else {
            $count = 0;
        }
        return $func['apply'](null, $arguments);
};
        }
        function shuffleSelf($array, $size) {
            $index = -1;
            $length = (is_array($array) ? count($array) : strlen($array));
            $lastIndex = $length - 1;
            $size = ($size === null ? $length : $size);
            while (++$index < $size) {
                $rand = $baseRandom($index, $lastIndex);
                $value = $array[$rand];
                $array[$rand] = $array[$index];
                $array[$index] = $value;
            }
            (is_array($array) ? array_splice($array, 0, $size) : substr($array, 0, $size));
            return $array;
        }
        $stringToPath = $memoizeCapped(function($string) {
        $result = [];
        if ($string['charCodeAt'](0) === 46) {
            $result[] = '';
        }
        str_replace($rePropName, function($match, $number, $quote, $subString) {
        $result[] = ($quote ? str_replace($reEscapeChar, '$1', $subString) : $number || $match);
}, $string);
        return $result;
});
        function toKey($value) {
            if (is_string($value) || $isSymbol($value)) {
                return $value;
            }
            $result = $value + '';
            return ($result == '0' && 1 / $value == -$INFINITY ? '-0' : $result);
        }
        function toSource($func) {
            if ($func != null) {
                try {
                    return call_user_func($funcToString, $func);
                } catch (\Throwable $e) {}
                try {
                    return $func + '';
                } catch (\Throwable $e) {}
            }
            return '';
        }
        function updateWrapDetails($details, $bitmask) {
            $arrayEach($wrapFlags, function($pair) {
        $value = '_.' + $pair[0];
        if ($bitmask & $pair[1] && !$arrayIncludes($details, $value)) {
            $details[] = $value;
        }
});
            return sort($details);
        }
        function wrapperClone($wrapper) {
            if ($wrapper instanceof $LazyWrapper) {
                return $wrapper['clone']();
            }
            $result = new $LodashWrapper($wrapper['__wrapped__'], $wrapper['__chain__']);
            $result['__actions__'] = $copyArray($wrapper['__actions__']);
            $result['__index__'] = $wrapper['__index__'];
            $result['__values__'] = $wrapper['__values__'];
            return $result;
        }
        function chunk($array, $size, $guard) {
            if (($guard ? $isIterateeCall($array, $size, $guard) : $size === null)) {
                $size = 1;
            } else {
                $size = $nativeMax($toInteger($size), 0);
            }
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length || $size < 1) {
                return [];
            }
            $index = 0;
            $resIndex = 0;
            $result = array_fill(0, $nativeCeil($length / $size), null);
            while ($index < $length) {
                $result[$resIndex++] = $baseSlice($array, $index, $index += $size);
            }
            return $result;
        }
        function _compact($array) {
            $index = -1;
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            $resIndex = 0;
            $result = [];
            while (++$index < $length) {
                $value = $array[$index];
                if ($value) {
                    $result[$resIndex++] = $value;
                }
            }
            return $result;
        }
        function concat() {
            $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
            if (!$length) {
                return [];
            }
            $args = array_fill(0, $length - 1, null);
            $array = $arguments[0];
            $index = $length;
            while ($index--) {
                $args[$index - 1] = $arguments[$index];
            }
            return $arrayPush(($isArray($array) ? $copyArray($array) : [$array]), $baseFlatten($args, 1));
        }
        $difference = $baseRest(function($array, $values) {
        return ($isArrayLikeObject($array) ? $baseDifference($array, $baseFlatten($values, 1, $isArrayLikeObject, true)) : []);
});
        $differenceBy = $baseRest(function($array, $values) {
        $iteratee = $last($values);
        if ($isArrayLikeObject($iteratee)) {
            $iteratee = null;
        }
        return ($isArrayLikeObject($array) ? $baseDifference($array, $baseFlatten($values, 1, $isArrayLikeObject, true), $getIteratee($iteratee, 2)) : []);
});
        $differenceWith = $baseRest(function($array, $values) {
        $comparator = $last($values);
        if ($isArrayLikeObject($comparator)) {
            $comparator = null;
        }
        return ($isArrayLikeObject($array) ? $baseDifference($array, $baseFlatten($values, 1, $isArrayLikeObject, true), null, $comparator) : []);
});
        function drop($array, $n, $guard) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return [];
            }
            $n = ($guard || $n === null ? 1 : $toInteger($n));
            return $baseSlice($array, ($n < 0 ? 0 : $n), $length);
        }
        function dropRight($array, $n, $guard) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return [];
            }
            $n = ($guard || $n === null ? 1 : $toInteger($n));
            $n = $length - $n;
            return $baseSlice($array, 0, ($n < 0 ? 0 : $n));
        }
        function dropRightWhile($array, $predicate) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseWhile($array, $getIteratee($predicate, 3), true, true) : []);
        }
        function dropWhile($array, $predicate) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseWhile($array, $getIteratee($predicate, 3), true) : []);
        }
        function fill($array, $value, $start, $end) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return [];
            }
            if ($start && !is_numeric($start) && $isIterateeCall($array, $value, $start)) {
                $start = 0;
                $end = $length;
            }
            return $baseFill($array, $value, $start, $end);
        }
        function findIndex($array, $predicate, $fromIndex) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return -1;
            }
            $index = ($fromIndex == null ? 0 : $toInteger($fromIndex));
            if ($index < 0) {
                $index = $nativeMax($length + $index, 0);
            }
            return $baseFindIndex($array, $getIteratee($predicate, 3), $index);
        }
        function findLastIndex($array, $predicate, $fromIndex) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return -1;
            }
            $index = $length - 1;
            if ($fromIndex !== null) {
                $index = $toInteger($fromIndex);
                $index = ($fromIndex < 0 ? $nativeMax($length + $index, 0) : $nativeMin($index, $length - 1));
            }
            return $baseFindIndex($array, $getIteratee($predicate, 3), $index, true);
        }
        function flatten($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseFlatten($array, 1) : []);
        }
        function flattenDeep($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseFlatten($array, $INFINITY) : []);
        }
        function flattenDepth($array, $depth) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return [];
            }
            $depth = ($depth === null ? 1 : $toInteger($depth));
            return $baseFlatten($array, $depth);
        }
        function fromPairs($pairs) {
            $index = -1;
            $length = ($pairs == null ? 0 : (is_array($pairs) ? count($pairs) : strlen($pairs)));
            $result = [];
            while (++$index < $length) {
                $pair = $pairs[$index];
                $baseAssignValue($result, $pair[0], $pair[1]);
            }
            return $result;
        }
        function head($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $array[0] : null);
        }
        function indexOf($array, $value, $fromIndex) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return -1;
            }
            $index = ($fromIndex == null ? 0 : $toInteger($fromIndex));
            if ($index < 0) {
                $index = $nativeMax($length + $index, 0);
            }
            return $baseIndexOf($array, $value, $index);
        }
        function initial($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseSlice($array, 0, -1) : []);
        }
        $intersection = $baseRest(function($arrays) {
        $mapped = $arrayMap($arrays, $castArrayLikeObject);
        return ((is_array($mapped) ? count($mapped) : strlen($mapped)) && $mapped[0] === $arrays[0] ? $baseIntersection($mapped) : []);
});
        $intersectionBy = $baseRest(function($arrays) {
        $iteratee = $last($arrays);
        $mapped = $arrayMap($arrays, $castArrayLikeObject);
        if ($iteratee === $last($mapped)) {
            $iteratee = null;
        } else {
            array_pop($mapped);
        }
        return ((is_array($mapped) ? count($mapped) : strlen($mapped)) && $mapped[0] === $arrays[0] ? $baseIntersection($mapped, $getIteratee($iteratee, 2)) : []);
});
        $intersectionWith = $baseRest(function($arrays) {
        $comparator = $last($arrays);
        $mapped = $arrayMap($arrays, $castArrayLikeObject);
        $comparator = (is_callable($comparator) ? $comparator : null);
        if ($comparator) {
            array_pop($mapped);
        }
        return ((is_array($mapped) ? count($mapped) : strlen($mapped)) && $mapped[0] === $arrays[0] ? $baseIntersection($mapped, null, $comparator) : []);
});
        function _join($array, $separator) {
            return ($array == null ? '' : call_user_func($nativeJoin, $array, $separator));
        }
        function last($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $array[$length - 1] : null);
        }
        function lastIndexOf($array, $value, $fromIndex) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return -1;
            }
            $index = $length;
            if ($fromIndex !== null) {
                $index = $toInteger($fromIndex);
                $index = ($index < 0 ? $nativeMax($length + $index, 0) : $nativeMin($index, $length - 1));
            }
            return ($value === $value ? $strictLastIndexOf($array, $value, $index) : $baseFindIndex($array, $baseIsNaN, $index, true));
        }
        function nth($array, $n) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseNth($array, $toInteger($n)) : null);
        }
        $pull = $baseRest($pullAll);
        function pullAll($array, $values) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) && $values && (is_array($values) ? count($values) : strlen($values)) ? $basePullAll($array, $values) : $array);
        }
        function pullAllBy($array, $values, $iteratee) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) && $values && (is_array($values) ? count($values) : strlen($values)) ? $basePullAll($array, $values, $getIteratee($iteratee, 2)) : $array);
        }
        function pullAllWith($array, $values, $comparator) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) && $values && (is_array($values) ? count($values) : strlen($values)) ? $basePullAll($array, $values, null, $comparator) : $array);
        }
        $pullAt = $flatRest(function($array, $indexes) {
        $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
        $result = $baseAt($array, $indexes);
        $basePullAt($array, sort($compareAscending, $arrayMap($indexes, function($index) {
        return ($isIndex($index, $length) ? +$index : $index);
})));
        return $result;
});
        function remove($array, $predicate) {
            $result = [];
            if (!$array && (is_array($array) ? count($array) : strlen($array))) {
                return $result;
            }
            $index = -1;
            $indexes = [];
            $length = (is_array($array) ? count($array) : strlen($array));
            $predicate = $getIteratee($predicate, 3);
            while (++$index < $length) {
                $value = $array[$index];
                if ($predicate($value, $index, $array)) {
                    $result[] = $value;
                    $indexes[] = $index;
                }
            }
            $basePullAt($array, $indexes);
            return $result;
        }
        function reverse($array) {
            return ($array == null ? $array : call_user_func($nativeReverse, $array));
        }
        function slice($array, $start, $end) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return [];
            }
            if ($end && !is_numeric($end) && $isIterateeCall($array, $start, $end)) {
                $start = 0;
                $end = $length;
            } else {
                $start = ($start == null ? 0 : $toInteger($start));
                $end = ($end === null ? $length : $toInteger($end));
            }
            return $baseSlice($array, $start, $end);
        }
        function sortedIndex($array, $value) {
            return $baseSortedIndex($array, $value);
        }
        function sortedIndexBy($array, $value, $iteratee) {
            return $baseSortedIndexBy($array, $value, $getIteratee($iteratee, 2));
        }
        function sortedIndexOf($array, $value) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if ($length) {
                $index = $baseSortedIndex($array, $value);
                if ($index < $length && $eq($array[$index], $value)) {
                    return $index;
                }
            }
            return -1;
        }
        function sortedLastIndex($array, $value) {
            return $baseSortedIndex($array, $value, true);
        }
        function sortedLastIndexBy($array, $value, $iteratee) {
            return $baseSortedIndexBy($array, $value, $getIteratee($iteratee, 2), true);
        }
        function sortedLastIndexOf($array, $value) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if ($length) {
                $index = $baseSortedIndex($array, $value, true) - 1;
                if ($eq($array[$index], $value)) {
                    return $index;
                }
            }
            return -1;
        }
        function sortedUniq($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSortedUniq($array) : []);
        }
        function sortedUniqBy($array, $iteratee) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSortedUniq($array, $getIteratee($iteratee, 2)) : []);
        }
        function tail($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseSlice($array, 1, $length) : []);
        }
        function take($array, $n, $guard) {
            if (!$array && (is_array($array) ? count($array) : strlen($array))) {
                return [];
            }
            $n = ($guard || $n === null ? 1 : $toInteger($n));
            return $baseSlice($array, 0, ($n < 0 ? 0 : $n));
        }
        function takeRight($array, $n, $guard) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return [];
            }
            $n = ($guard || $n === null ? 1 : $toInteger($n));
            $n = $length - $n;
            return $baseSlice($array, ($n < 0 ? 0 : $n), $length);
        }
        function takeRightWhile($array, $predicate) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseWhile($array, $getIteratee($predicate, 3), false, true) : []);
        }
        function takeWhile($array, $predicate) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseWhile($array, $getIteratee($predicate, 3)) : []);
        }
        $union = $baseRest(function($arrays) {
        return $baseUniq($baseFlatten($arrays, 1, $isArrayLikeObject, true));
});
        $unionBy = $baseRest(function($arrays) {
        $iteratee = $last($arrays);
        if ($isArrayLikeObject($iteratee)) {
            $iteratee = null;
        }
        return $baseUniq($baseFlatten($arrays, 1, $isArrayLikeObject, true), $getIteratee($iteratee, 2));
});
        $unionWith = $baseRest(function($arrays) {
        $comparator = $last($arrays);
        $comparator = (is_callable($comparator) ? $comparator : null);
        return $baseUniq($baseFlatten($arrays, 1, $isArrayLikeObject, true), null, $comparator);
});
        function uniq($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseUniq($array) : []);
        }
        function uniqBy($array, $iteratee) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseUniq($array, $getIteratee($iteratee, 2)) : []);
        }
        function uniqWith($array, $comparator) {
            $comparator = (is_callable($comparator) ? $comparator : null);
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseUniq($array, null, $comparator) : []);
        }
        function unzip($array) {
            if (!$array && (is_array($array) ? count($array) : strlen($array))) {
                return [];
            }
            $length = 0;
            $array = $arrayFilter($array, function($group) {
        if ($isArrayLikeObject($group)) {
            $length = $nativeMax((is_array($group) ? count($group) : strlen($group)), $length);
            return true;
        }
});
            return $baseTimes($length, function($index) {
        return $arrayMap($array, $baseProperty($index));
});
        }
        function unzipWith($array, $iteratee) {
            if (!$array && (is_array($array) ? count($array) : strlen($array))) {
                return [];
            }
            $result = $unzip($array);
            if ($iteratee == null) {
                return $result;
            }
            return $arrayMap($result, function($group) {
        return $apply($iteratee, null, $group);
});
        }
        $without = $baseRest(function($array, $values) {
        return ($isArrayLikeObject($array) ? $baseDifference($array, $values) : []);
});
        $xor = $baseRest(function($arrays) {
        return $baseXor($arrayFilter($arrays, $isArrayLikeObject));
});
        $xorBy = $baseRest(function($arrays) {
        $iteratee = $last($arrays);
        if ($isArrayLikeObject($iteratee)) {
            $iteratee = null;
        }
        return $baseXor($arrayFilter($arrays, $isArrayLikeObject), $getIteratee($iteratee, 2));
});
        $xorWith = $baseRest(function($arrays) {
        $comparator = $last($arrays);
        $comparator = (is_callable($comparator) ? $comparator : null);
        return $baseXor($arrayFilter($arrays, $isArrayLikeObject), null, $comparator);
});
        $zip = $baseRest($unzip);
        function zipObject($props, $values) {
            return $baseZipObject($props || [], $values || [], $assignValue);
        }
        function zipObjectDeep($props, $values) {
            return $baseZipObject($props || [], $values || [], $baseSet);
        }
        $zipWith = $baseRest(function($arrays) {
        $length = (is_array($arrays) ? count($arrays) : strlen($arrays));
        $iteratee = ($length > 1 ? $arrays[$length - 1] : null);
        $iteratee = (is_callable($iteratee) ? (static function() { array_pop($arrays); return $iteratee; })() : null);
        return $unzipWith($arrays, $iteratee);
});
        function chain($value) {
            $result = $lodash($value);
            $result['__chain__'] = true;
            return $result;
        }
        function tap($value, $interceptor) {
            $interceptor($value);
            return $value;
        }
        function thru($value, $interceptor) {
            return $interceptor($value);
        }
        $wrapperAt = $flatRest(function($paths) {
        $length = (is_array($paths) ? count($paths) : strlen($paths));
        $start = ($length ? $paths[0] : 0);
        $value = $this->__wrapped__;
        $interceptor = function($object) {
        return $baseAt($object, $paths);
};
        if ($length > 1 || (is_array($this->__actions__) ? count($this->__actions__) : strlen($this->__actions__)) || !$value instanceof $LazyWrapper || !$isIndex($start)) {
            return $this->thru($interceptor);
        }
        $value = array_slice($start, +$start + ($length ? 1 : 0), $value);
        $value['__actions__'][] = [
            'func' => $thru,
            'args' => [$interceptor],
            'thisArg' => null
        ];
        return new $LodashWrapper($value, $this->__chain__)['thru'](function($array) {
        if ($length && !(is_array($array) ? count($array) : strlen($array))) {
            $array[] = null;
        }
        return $array;
});
});
        function wrapperChain() {
            return $chain($this);
        }
        function wrapperCommit() {
            return new $LodashWrapper($this->value(), $this->__chain__);
        }
        function wrapperNext() {
            if ($this->__values__ === null) {
                $this->__values__ = $toArray($this->value());
            }
            $done = $this->__index__ >= (is_array($this->__values__) ? count($this->__values__) : strlen($this->__values__));
            $value = ($done ? null : $this->__values__[$this->__index__++]);
            return [
                'done' => $done,
                'value' => $value
            ];
        }
        function wrapperToIterator() {
            return $this;
        }
        function wrapperPlant($value) {
            $result = null;
            $parent = $this;
            while ($parent instanceof $baseLodash) {
                $clone = $wrapperClone($parent);
                $clone['__index__'] = 0;
                $clone['__values__'] = null;
                if ($result) {
                    $previous['__wrapped__'] = $clone;
                } else {
                    $result = $clone;
                }
                $previous = $clone;
                $parent = $parent['__wrapped__'];
            }
            $previous['__wrapped__'] = $value;
            return $result;
        }
        function wrapperReverse() {
            $value = $this->__wrapped__;
            if ($value instanceof $LazyWrapper) {
                $wrapped = $value;
                if ((is_array($this->__actions__) ? count($this->__actions__) : strlen($this->__actions__))) {
                    $wrapped = new $LazyWrapper($this);
                }
                $wrapped = array_reverse($wrapped);
                $wrapped['__actions__'][] = [
                    'func' => $thru,
                    'args' => [$reverse],
                    'thisArg' => null
                ];
                return new $LodashWrapper($wrapped, $this->__chain__);
            }
            return $this->thru($reverse);
        }
        function wrapperValue() {
            return $baseWrapperValue($this->__wrapped__, $this->__actions__);
        }
        $countBy = $createAggregator(function($result, $value, $key) {
        if (call_user_func($hasOwnProperty, $result, $key)) {
            ++$result[$key];
        } else {
            $baseAssignValue($result, $key, 1);
        }
});
        function every($collection, $predicate, $guard) {
            $func = ($isArray($collection) ? $arrayEvery : $baseEvery);
            if ($guard && $isIterateeCall($collection, $predicate, $guard)) {
                $predicate = null;
            }
            return $func($collection, $getIteratee($predicate, 3));
        }
        function filter($collection, $predicate) {
            $func = ($isArray($collection) ? $arrayFilter : $baseFilter);
            return $func($collection, $getIteratee($predicate, 3));
        }
        $find = $createFind($findIndex);
        $findLast = $createFind($findLastIndex);
        function flatMap($collection, $iteratee) {
            return $baseFlatten($map($collection, $iteratee), 1);
        }
        function flatMapDeep($collection, $iteratee) {
            return $baseFlatten($map($collection, $iteratee), $INFINITY);
        }
        function flatMapDepth($collection, $iteratee, $depth) {
            $depth = ($depth === null ? 1 : $toInteger($depth));
            return $baseFlatten($map($collection, $iteratee), $depth);
        }
        function _forEach($collection, $iteratee) {
            $func = ($isArray($collection) ? $arrayEach : $baseEach);
            return $func($collection, $getIteratee($iteratee, 3));
        }
        function forEachRight($collection, $iteratee) {
            $func = ($isArray($collection) ? $arrayEachRight : $baseEachRight);
            return $func($collection, $getIteratee($iteratee, 3));
        }
        $groupBy = $createAggregator(function($result, $value, $key) {
        if (call_user_func($hasOwnProperty, $result, $key)) {
            $result[$key][] = $value;
        } else {
            $baseAssignValue($result, $key, [$value]);
        }
});
        function includes($collection, $value, $fromIndex, $guard) {
            $collection = ($isArrayLike($collection) ? $collection : $values($collection));
            $fromIndex = ($fromIndex && !$guard ? $toInteger($fromIndex) : 0);
            $length = (is_array($collection) ? count($collection) : strlen($collection));
            if ($fromIndex < 0) {
                $fromIndex = $nativeMax($length + $fromIndex, 0);
            }
            return ($isString($collection) ? $fromIndex <= $length && array_search($value, $fromIndex, $collection) > -1 : !!$length && $baseIndexOf($collection, $value, $fromIndex) > -1);
        }
        $invokeMap = $baseRest(function($collection, $path, $args) {
        $index = -1;
        $isFunc = is_callable($path);
        $result = ($isArrayLike($collection) ? array_fill(0, (is_array($collection) ? count($collection) : strlen($collection)), null) : []);
        $baseEach($collection, function($value) {
        $result[++$index] = ($isFunc ? $apply($path, $value, $args) : $baseInvoke($value, $path, $args));
});
        return $result;
});
        $keyBy = $createAggregator(function($result, $value, $key) {
        $baseAssignValue($result, $key, $value);
});
        function map($collection, $iteratee) {
            $func = ($isArray($collection) ? $arrayMap : $baseMap);
            return $func($collection, $getIteratee($iteratee, 3));
        }
        function orderBy($collection, $iteratees, $orders, $guard) {
            if ($collection == null) {
                return [];
            }
            if (!$isArray($iteratees)) {
                $iteratees = ($iteratees == null ? [] : [$iteratees]);
            }
            $orders = ($guard ? null : $orders);
            if (!$isArray($orders)) {
                $orders = ($orders == null ? [] : [$orders]);
            }
            return $baseOrderBy($collection, $iteratees, $orders);
        }
        $partition = $createAggregator(function($result, $value, $key) {
        $result[($key ? 0 : 1)][] = $value;
}, function() {
        return [[], []];
});
        function reduce($collection, $iteratee, $accumulator) {
            $func = ($isArray($collection) ? $arrayReduce : $baseReduce);
            $initAccum = (is_array($arguments) ? count($arguments) : strlen($arguments)) < 3;
            return $func($collection, $getIteratee($iteratee, 4), $accumulator, $initAccum, $baseEach);
        }
        function reduceRight($collection, $iteratee, $accumulator) {
            $func = ($isArray($collection) ? $arrayReduceRight : $baseReduce);
            $initAccum = (is_array($arguments) ? count($arguments) : strlen($arguments)) < 3;
            return $func($collection, $getIteratee($iteratee, 4), $accumulator, $initAccum, $baseEachRight);
        }
        function reject($collection, $predicate) {
            $func = ($isArray($collection) ? $arrayFilter : $baseFilter);
            return $func($collection, $negate($getIteratee($predicate, 3)));
        }
        function sample($collection) {
            $func = ($isArray($collection) ? $arraySample : $baseSample);
            return $func($collection);
        }
        function sampleSize($collection, $n, $guard) {
            if (($guard ? $isIterateeCall($collection, $n, $guard) : $n === null)) {
                $n = 1;
            } else {
                $n = $toInteger($n);
            }
            $func = ($isArray($collection) ? $arraySampleSize : $baseSampleSize);
            return $func($collection, $n);
        }
        function _shuffle($collection) {
            $func = ($isArray($collection) ? $arrayShuffle : $baseShuffle);
            return $func($collection);
        }
        function size($collection) {
            if ($collection == null) {
                return 0;
            }
            if ($isArrayLike($collection)) {
                return ($isString($collection) ? $stringSize($collection) : (is_array($collection) ? count($collection) : strlen($collection)));
            }
            $tag = $getTag($collection);
            if ($tag == $mapTag || $tag == $setTag) {
                return $collection['size'];
            }
            return (is_array($baseKeys($collection)) ? count($baseKeys($collection)) : strlen($baseKeys($collection)));
        }
        function some($collection, $predicate, $guard) {
            $func = ($isArray($collection) ? $arraySome : $baseSome);
            if ($guard && $isIterateeCall($collection, $predicate, $guard)) {
                $predicate = null;
            }
            return $func($collection, $getIteratee($predicate, 3));
        }
        $sortBy = $baseRest(function($collection, $iteratees) {
        if ($collection == null) {
            return [];
        }
        $length = (is_array($iteratees) ? count($iteratees) : strlen($iteratees));
        if ($length > 1 && $isIterateeCall($collection, $iteratees[0], $iteratees[1])) {
            $iteratees = [];
        } else if ($length > 2 && $isIterateeCall($iteratees[0], $iteratees[1], $iteratees[2])) {
            $iteratees = [$iteratees[0]];
        }
        return $baseOrderBy($collection, $baseFlatten($iteratees, 1), []);
});
        $now = $ctxNow || function() {
        return $root['Date']['now']();
};
        function after($n, $func) {
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $n = $toInteger($n);
            return function() {
        if (--$n < 1) {
            return $func['apply']($this, $arguments);
        }
};
        }
        function ary($func, $n, $guard) {
            $n = ($guard ? null : $n);
            $n = ($func && $n == null ? (is_array($func) ? count($func) : strlen($func)) : $n);
            return $createWrap($func, $WRAP_ARY_FLAG, null, null, null, null, $n);
        }
        function before($n, $func) {
            $result = null;
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $n = $toInteger($n);
            return function() {
        if (--$n > 0) {
            $result = $func['apply']($this, $arguments);
        }
        if ($n <= 1) {
            $func = null;
        }
        return $result;
};
        }
        $bind = $baseRest(function($func, $thisArg, $partials) {
        $bitmask = $WRAP_BIND_FLAG;
        if ((is_array($partials) ? count($partials) : strlen($partials))) {
            $holders = $replaceHolders($partials, $getHolder($bind));
            $bitmask |= $WRAP_PARTIAL_FLAG;
        }
        return $createWrap($func, $bitmask, $thisArg, $partials, $holders);
});
        $bindKey = $baseRest(function($object, $key, $partials) {
        $bitmask = $WRAP_BIND_FLAG | $WRAP_BIND_KEY_FLAG;
        if ((is_array($partials) ? count($partials) : strlen($partials))) {
            $holders = $replaceHolders($partials, $getHolder($bindKey));
            $bitmask |= $WRAP_PARTIAL_FLAG;
        }
        return $createWrap($key, $bitmask, $object, $partials, $holders);
});
        function curry($func, $arity, $guard) {
            $arity = ($guard ? null : $arity);
            $result = $createWrap($func, $WRAP_CURRY_FLAG, null, null, null, null, null, $arity);
            $result['placeholder'] = $curry['placeholder'];
            return $result;
        }
        function curryRight($func, $arity, $guard) {
            $arity = ($guard ? null : $arity);
            $result = $createWrap($func, $WRAP_CURRY_RIGHT_FLAG, null, null, null, null, null, $arity);
            $result['placeholder'] = $curryRight['placeholder'];
            return $result;
        }
        function debounce($func, $wait, $options) {
            $lastArgs = null;
            $lastThis = null;
            $maxWait = null;
            $result = null;
            $timerId = null;
            $lastCallTime = null;
            $lastInvokeTime = 0;
            $leading = false;
            $maxing = false;
            $trailing = true;
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $wait = $toNumber($wait) || 0;
            if ($isObject($options)) {
                $leading = !!$options['leading'];
                $maxing = (is_array($options) ? (array_key_exists('maxWait', $options) || in_array('maxWait', $options)) : false);
                $maxWait = ($maxing ? $nativeMax($toNumber($options['maxWait']) || 0, $wait) : $maxWait);
                $trailing = ((is_array($options) ? (array_key_exists('trailing', $options) || in_array('trailing', $options)) : false) ? !!$options['trailing'] : $trailing);
            }
            function invokeFunc($time) {
                $args = $lastArgs;
                $thisArg = $lastThis;
                $lastArgs = $lastThis = null;
                $lastInvokeTime = $time;
                $result = $func['apply']($thisArg, $args);
                return $result;
            }
            function leadingEdge($time) {
                $lastInvokeTime = $time;
                $timerId = $setTimeout($timerExpired, $wait);
                return ($leading ? $invokeFunc($time) : $result);
            }
            function remainingWait($time) {
                $timeSinceLastCall = $time - $lastCallTime;
                $timeSinceLastInvoke = $time - $lastInvokeTime;
                $timeWaiting = $wait - $timeSinceLastCall;
                return ($maxing ? $nativeMin($timeWaiting, $maxWait - $timeSinceLastInvoke) : $timeWaiting);
            }
            function shouldInvoke($time) {
                $timeSinceLastCall = $time - $lastCallTime;
                $timeSinceLastInvoke = $time - $lastInvokeTime;
                return $lastCallTime === null || $timeSinceLastCall >= $wait || $timeSinceLastCall < 0 || $maxing && $timeSinceLastInvoke >= $maxWait;
            }
            function timerExpired() {
                $time = $now();
                if ($shouldInvoke($time)) {
                    return $trailingEdge($time);
                }
                $timerId = $setTimeout($timerExpired, $remainingWait($time));
            }
            function trailingEdge($time) {
                $timerId = null;
                if ($trailing && $lastArgs) {
                    return $invokeFunc($time);
                }
                $lastArgs = $lastThis = null;
                return $result;
            }
            function cancel() {
                if ($timerId !== null) {
                    $clearTimeout($timerId);
                }
                $lastInvokeTime = 0;
                $lastArgs = $lastCallTime = $lastThis = $timerId = null;
            }
            function flush() {
                return ($timerId === null ? $result : $trailingEdge($now()));
            }
            function debounced() {
                $time = $now();
                $isInvoking = $shouldInvoke($time);
                $lastArgs = $arguments;
                $lastThis = $this;
                $lastCallTime = $time;
                if ($isInvoking) {
                    if ($timerId === null) {
                        return $leadingEdge($lastCallTime);
                    }
                    if ($maxing) {
                        $clearTimeout($timerId);
                        $timerId = $setTimeout($timerExpired, $wait);
                        return $invokeFunc($lastCallTime);
                    }
                }
                if ($timerId === null) {
                    $timerId = $setTimeout($timerExpired, $wait);
                }
                return $result;
            }
            $debounced['cancel'] = $cancel;
            $debounced['flush'] = $flush;
            return $debounced;
        }
        $defer = $baseRest(function($func, $args) {
        return $baseDelay($func, 1, $args);
});
        $delay = $baseRest(function($func, $wait, $args) {
        return $baseDelay($func, $toNumber($wait) || 0, $args);
});
        function flip($func) {
            return $createWrap($func, $WRAP_FLIP_FLAG);
        }
        function memoize($func, $resolver) {
            if (!is_callable($func) || $resolver != null && !is_callable($resolver)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $memoized = function() {
        $args = $arguments;
        $key = ($resolver ? $resolver['apply']($this, $args) : $args[0]);
        $cache = $memoized['cache'];
        if ($cache['has']($key)) {
            return $cache['get']($key);
        }
        $result = $func['apply']($this, $args);
        $memoized['cache'] = $cache['set']($key, $result) || $cache;
        return $result;
};
            $memoized['cache'] = new $memoize['Cache'] || $MapCache();
            return $memoized;
        }
        $memoize['Cache'] = $MapCache;
        function negate($predicate) {
            if (!is_callable($predicate)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            return function() {
        $args = $arguments;
        switch ((is_array($args) ? count($args) : strlen($args))) {
            case 0:
                return !call_user_func($predicate, $this);
            case 1:
                return !call_user_func($predicate, $this, $args[0]);
            case 2:
                return !call_user_func($predicate, $this, $args[0], $args[1]);
            case 3:
                return !call_user_func($predicate, $this, $args[0], $args[1], $args[2]);
        }
        return !$predicate['apply']($this, $args);
};
        }
        function once($func) {
            return $before(2, $func);
        }
        $overArgs = $castRest(function($func, $transforms) {
        $transforms = ((is_array($transforms) ? count($transforms) : strlen($transforms)) == 1 && $isArray($transforms[0]) ? $arrayMap($transforms[0], $baseUnary($getIteratee())) : $arrayMap($baseFlatten($transforms, 1), $baseUnary($getIteratee())));
        $funcsLength = (is_array($transforms) ? count($transforms) : strlen($transforms));
        return $baseRest(function($args) {
        $index = -1;
        $length = $nativeMin((is_array($args) ? count($args) : strlen($args)), $funcsLength);
        while (++$index < $length) {
            $args[$index] = call_user_func($transforms[$index], $this, $args[$index]);
        }
        return $apply($func, $this, $args);
});
});
        $partial = $baseRest(function($func, $partials) {
        $holders = $replaceHolders($partials, $getHolder($partial));
        return $createWrap($func, $WRAP_PARTIAL_FLAG, null, $partials, $holders);
});
        $partialRight = $baseRest(function($func, $partials) {
        $holders = $replaceHolders($partials, $getHolder($partialRight));
        return $createWrap($func, $WRAP_PARTIAL_RIGHT_FLAG, null, $partials, $holders);
});
        $rearg = $flatRest(function($func, $indexes) {
        return $createWrap($func, $WRAP_REARG_FLAG, null, null, null, $indexes);
});
        function rest($func, $start) {
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $start = ($start === null ? $start : $toInteger($start));
            return $baseRest($func, $start);
        }
        function spread($func, $start) {
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            $start = ($start == null ? 0 : $nativeMax($toInteger($start), 0));
            return $baseRest(function($args) {
        $array = $args[$start];
        $otherArgs = $castSlice($args, 0, $start);
        if ($array) {
            $arrayPush($otherArgs, $array);
        }
        return $apply($func, $this, $otherArgs);
});
        }
        function throttle($func, $wait, $options) {
            $leading = true;
            $trailing = true;
            if (!is_callable($func)) {
                throw new $TypeError($FUNC_ERROR_TEXT);
            }
            if ($isObject($options)) {
                $leading = ((is_array($options) ? (array_key_exists('leading', $options) || in_array('leading', $options)) : false) ? !!$options['leading'] : $leading);
                $trailing = ((is_array($options) ? (array_key_exists('trailing', $options) || in_array('trailing', $options)) : false) ? !!$options['trailing'] : $trailing);
            }
            return $debounce($func, $wait, [
                'leading' => $leading,
                'maxWait' => $wait,
                'trailing' => $trailing
            ]);
        }
        function unary($func) {
            return $ary($func, 1);
        }
        function wrap($value, $wrapper) {
            return $partial($castFunction($wrapper), $value);
        }
        function castArray() {
            if (!(is_array($arguments) ? count($arguments) : strlen($arguments))) {
                return [];
            }
            $value = $arguments[0];
            return ($isArray($value) ? $value : [$value]);
        }
        function _clone($value) {
            return $baseClone($value, $CLONE_SYMBOLS_FLAG);
        }
        function cloneWith($value, $customizer) {
            $customizer = (is_callable($customizer) ? $customizer : null);
            return $baseClone($value, $CLONE_SYMBOLS_FLAG, $customizer);
        }
        function cloneDeep($value) {
            return $baseClone($value, $CLONE_DEEP_FLAG | $CLONE_SYMBOLS_FLAG);
        }
        function cloneDeepWith($value, $customizer) {
            $customizer = (is_callable($customizer) ? $customizer : null);
            return $baseClone($value, $CLONE_DEEP_FLAG | $CLONE_SYMBOLS_FLAG, $customizer);
        }
        function conformsTo($object, $source) {
            return $source == null || $baseConformsTo($object, $source, $keys($source));
        }
        function eq($value, $other) {
            return $value === $other || $value !== $value && $other !== $other;
        }
        $gt = $createRelationalOperation($baseGt);
        $gte = $createRelationalOperation(function($value, $other) {
        return $value >= $other;
});
        $isArguments = ($baseIsArguments((function() {
        return $arguments;
})()) ? $baseIsArguments : function($value) {
        return $isObjectLike($value) && call_user_func($hasOwnProperty, $value, 'callee') && !call_user_func($propertyIsEnumerable, $value, 'callee');
});
        $isArray = 'Array'['isArray'];
        $isArrayBuffer = ($nodeIsArrayBuffer ? $baseUnary($nodeIsArrayBuffer) : $baseIsArrayBuffer);
        function isArrayLike($value) {
            return $value != null && $isLength((is_array($value) ? count($value) : strlen($value))) && !$isFunction($value);
        }
        function isArrayLikeObject($value) {
            return $isObjectLike($value) && $isArrayLike($value);
        }
        function isBoolean($value) {
            return $value === true || $value === false || $isObjectLike($value) && $baseGetTag($value) == $boolTag;
        }
        $isBuffer = $nativeIsBuffer || $stubFalse;
        $isDate = ($nodeIsDate ? $baseUnary($nodeIsDate) : $baseIsDate);
        function isElement($value) {
            return $isObjectLike($value) && $value['nodeType'] === 1 && !$isPlainObject($value);
        }
        function isEmpty($value) {
            if ($value == null) {
                return true;
            }
            if ($isArrayLike($value) && $isArray($value) || is_string($value) || is_callable($value['splice']) || $isBuffer($value) || $isTypedArray($value) || $isArguments($value)) {
                return !(is_array($value) ? count($value) : strlen($value));
            }
            $tag = $getTag($value);
            if ($tag == $mapTag || $tag == $setTag) {
                return !$value['size'];
            }
            if ($isPrototype($value)) {
                return !(is_array($baseKeys($value)) ? count($baseKeys($value)) : strlen($baseKeys($value)));
            }
            foreach ($value as $key => $__value__) {
                if (call_user_func($hasOwnProperty, $value, $key)) {
                    return false;
                }
            }
            return true;
        }
        function isEqual($value, $other) {
            return $baseIsEqual($value, $other);
        }
        function isEqualWith($value, $other, $customizer) {
            $customizer = (is_callable($customizer) ? $customizer : null);
            $result = ($customizer ? $customizer($value, $other) : null);
            return ($result === null ? $baseIsEqual($value, $other, null, $customizer) : !!$result);
        }
        function isError($value) {
            if (!$isObjectLike($value)) {
                return false;
            }
            $tag = $baseGetTag($value);
            return $tag == $errorTag || $tag == $domExcTag || is_string($value['message']) && is_string($value['name']) && !$isPlainObject($value);
        }
        function isFinite($value) {
            return is_numeric($value) && $nativeIsFinite($value);
        }
        function isFunction($value) {
            if (!$isObject($value)) {
                return false;
            }
            $tag = $baseGetTag($value);
            return $tag == $funcTag || $tag == $genTag || $tag == $asyncTag || $tag == $proxyTag;
        }
        function isInteger($value) {
            return is_numeric($value) && $value == $toInteger($value);
        }
        function isLength($value) {
            return is_numeric($value) && $value > -1 && $value % 1 == 0 && $value <= $MAX_SAFE_INTEGER;
        }
        function isObject($value) {
            $type = $value;
            return $value != null && $type == 'object' || $type == 'function';
        }
        function isObjectLike($value) {
            return $value != null && (is_object($value) || is_array($value));
        }
        $isMap = ($nodeIsMap ? $baseUnary($nodeIsMap) : $baseIsMap);
        function isMatch($object, $source) {
            return $object === $source || $baseIsMatch($object, $source, $getMatchData($source));
        }
        function isMatchWith($object, $source, $customizer) {
            $customizer = (is_callable($customizer) ? $customizer : null);
            return $baseIsMatch($object, $source, $getMatchData($source), $customizer);
        }
        function isNaN($value) {
            return $isNumber($value) && $value != +$value;
        }
        function isNative($value) {
            if ($isMaskable($value)) {
                throw new $Error($CORE_ERROR_TEXT);
            }
            return $baseIsNative($value);
        }
        function isNull($value) {
            return $value === null;
        }
        function isNil($value) {
            return $value == null;
        }
        function isNumber($value) {
            return is_numeric($value) || $isObjectLike($value) && $baseGetTag($value) == $numberTag;
        }
        function isPlainObject($value) {
            if (!$isObjectLike($value) || $baseGetTag($value) != $objectTag) {
                return false;
            }
            $proto = $getPrototype($value);
            if ($proto === null) {
                return true;
            }
            $Ctor = call_user_func($hasOwnProperty, $proto, 'constructor') && $proto['constructor'];
            return is_callable($Ctor) && $Ctor instanceof $Ctor && call_user_func($funcToString, $Ctor) == $objectCtorString;
        }
        $isRegExp = ($nodeIsRegExp ? $baseUnary($nodeIsRegExp) : $baseIsRegExp);
        function isSafeInteger($value) {
            return $isInteger($value) && $value >= -$MAX_SAFE_INTEGER && $value <= $MAX_SAFE_INTEGER;
        }
        $isSet = ($nodeIsSet ? $baseUnary($nodeIsSet) : $baseIsSet);
        function isString($value) {
            return is_string($value) || !$isArray($value) && $isObjectLike($value) && $baseGetTag($value) == $stringTag;
        }
        function isSymbol($value) {
            return false || $isObjectLike($value) && $baseGetTag($value) == $symbolTag;
        }
        $isTypedArray = ($nodeIsTypedArray ? $baseUnary($nodeIsTypedArray) : $baseIsTypedArray);
        function isUndefined($value) {
            return $value === null;
        }
        function isWeakMap($value) {
            return $isObjectLike($value) && $getTag($value) == $weakMapTag;
        }
        function isWeakSet($value) {
            return $isObjectLike($value) && $baseGetTag($value) == $weakSetTag;
        }
        $lt = $createRelationalOperation($baseLt);
        $lte = $createRelationalOperation(function($value, $other) {
        return $value <= $other;
});
        function toArray($value) {
            if (!$value) {
                return [];
            }
            if ($isArrayLike($value)) {
                return ($isString($value) ? $stringToArray($value) : $copyArray($value));
            }
            if ($symIterator && $value[$symIterator]) {
                return $iteratorToArray($value[$symIterator]());
            }
            $tag = $getTag($value);
            $func = ($tag == $mapTag ? $mapToArray : ($tag == $setTag ? $setToArray : $values));
            return $func($value);
        }
        function toFinite($value) {
            if (!$value) {
                return ($value === 0 ? $value : 0);
            }
            $value = $toNumber($value);
            if ($value === $INFINITY || $value === -$INFINITY) {
                $sign = ($value < 0 ? -1 : 1);
                return $sign * $MAX_INTEGER;
            }
            return ($value === $value ? $value : 0);
        }
        function toInteger($value) {
            $result = $toFinite($value);
            $remainder = $result % 1;
            return ($result === $result ? ($remainder ? $result - $remainder : $result) : 0);
        }
        function toLength($value) {
            return ($value ? $baseClamp($toInteger($value), 0, $MAX_ARRAY_LENGTH) : 0);
        }
        function toNumber($value) {
            if (is_numeric($value)) {
                return $value;
            }
            if ($isSymbol($value)) {
                return $NAN;
            }
            if ($isObject($value)) {
                $other = (is_callable($value['valueOf']) ? $value['valueOf']() : $value);
                $value = ($isObject($other) ? $other + '' : $other);
            }
            if (!is_string($value)) {
                return ($value === 0 ? $value : +$value);
            }
            $value = $baseTrim($value);
            $isBinary = preg_match($value, $reIsBinary);
            return ($isBinary || preg_match($value, $reIsOctal) ? $freeParseInt(array_slice(2, $value), ($isBinary ? 2 : 8)) : (preg_match($value, $reIsBadHex) ? $NAN : +$value));
        }
        function toPlainObject($value) {
            return $copyObject($value, $keysIn($value));
        }
        function toSafeInteger($value) {
            return ($value ? $baseClamp($toInteger($value), -$MAX_SAFE_INTEGER, $MAX_SAFE_INTEGER) : ($value === 0 ? $value : 0));
        }
        function toString($value) {
            return ($value == null ? '' : $baseToString($value));
        }
        $assign = $createAssigner(function($object, $source) {
        if ($isPrototype($source) || $isArrayLike($source)) {
            $copyObject($source, $keys($source), $object);
            return;
        }
        foreach ($source as $key => $__value__) {
            if (call_user_func($hasOwnProperty, $source, $key)) {
                $assignValue($object, $key, $source[$key]);
            }
        }
});
        $assignIn = $createAssigner(function($object, $source) {
        $copyObject($source, $keysIn($source), $object);
});
        $assignInWith = $createAssigner(function($object, $source, $srcIndex, $customizer) {
        $copyObject($source, $keysIn($source), $object, $customizer);
});
        $assignWith = $createAssigner(function($object, $source, $srcIndex, $customizer) {
        $copyObject($source, $keys($source), $object, $customizer);
});
        $at = $flatRest($baseAt);
        function create($prototype, $properties) {
            $result = $baseCreate($prototype);
            return ($properties == null ? $result : $baseAssign($result, $properties));
        }
        $defaults = $baseRest(function($object, $sources) {
        $object = $Object($object);
        $index = -1;
        $length = (is_array($sources) ? count($sources) : strlen($sources));
        $guard = ($length > 2 ? $sources[2] : null);
        if ($guard && $isIterateeCall($sources[0], $sources[1], $guard)) {
            $length = 1;
        }
        while (++$index < $length) {
            $source = $sources[$index];
            $props = $keysIn($source);
            $propsIndex = -1;
            $propsLength = (is_array($props) ? count($props) : strlen($props));
            while (++$propsIndex < $propsLength) {
                $key = $props[$propsIndex];
                $value = $object[$key];
                if ($value === null || $eq($value, $objectProto[$key]) && !call_user_func($hasOwnProperty, $object, $key)) {
                    $object[$key] = $source[$key];
                }
            }
        }
        return $object;
});
        $defaultsDeep = $baseRest(function($args) {
        $args[] = null;
        return $apply($mergeWith, null, $args);
});
        function findKey($object, $predicate) {
            return $baseFindKey($object, $getIteratee($predicate, 3), $baseForOwn);
        }
        function findLastKey($object, $predicate) {
            return $baseFindKey($object, $getIteratee($predicate, 3), $baseForOwnRight);
        }
        function forIn($object, $iteratee) {
            return ($object == null ? $object : $baseFor($object, $getIteratee($iteratee, 3), $keysIn));
        }
        function forInRight($object, $iteratee) {
            return ($object == null ? $object : $baseForRight($object, $getIteratee($iteratee, 3), $keysIn));
        }
        function forOwn($object, $iteratee) {
            return $object && $baseForOwn($object, $getIteratee($iteratee, 3));
        }
        function forOwnRight($object, $iteratee) {
            return $object && $baseForOwnRight($object, $getIteratee($iteratee, 3));
        }
        function functions($object) {
            return ($object == null ? [] : $baseFunctions($object, $keys($object)));
        }
        function functionsIn($object) {
            return ($object == null ? [] : $baseFunctions($object, $keysIn($object)));
        }
        function get($object, $path, $defaultValue) {
            $result = ($object == null ? null : $baseGet($object, $path));
            return ($result === null ? $defaultValue : $result);
        }
        function has($object, $path) {
            return $object != null && $hasPath($object, $path, $baseHas);
        }
        function hasIn($object, $path) {
            return $object != null && $hasPath($object, $path, $baseHasIn);
        }
        $invert = $createInverter(function($result, $value, $key) {
        if ($value != null && !is_callable($value['toString'])) {
            $value = call_user_func($nativeObjectToString, $value);
        }
        $result[$value] = $key;
}, $constant($identity));
        $invertBy = $createInverter(function($result, $value, $key) {
        if ($value != null && !is_callable($value['toString'])) {
            $value = call_user_func($nativeObjectToString, $value);
        }
        if (call_user_func($hasOwnProperty, $result, $value)) {
            $result[$value][] = $key;
        } else {
            $result[$value] = [$key];
        }
}, $getIteratee);
        $invoke = $baseRest($baseInvoke);
        function keys($object) {
            return ($isArrayLike($object) ? $arrayLikeKeys($object) : $baseKeys($object));
        }
        function keysIn($object) {
            return ($isArrayLike($object) ? $arrayLikeKeys($object, true) : $baseKeysIn($object));
        }
        function mapKeys($object, $iteratee) {
            $result = [];
            $iteratee = $getIteratee($iteratee, 3);
            $baseForOwn($object, function($value, $key, $object) {
        $baseAssignValue($result, $iteratee($value, $key, $object), $value);
});
            return $result;
        }
        function mapValues($object, $iteratee) {
            $result = [];
            $iteratee = $getIteratee($iteratee, 3);
            $baseForOwn($object, function($value, $key, $object) {
        $baseAssignValue($result, $key, $iteratee($value, $key, $object));
});
            return $result;
        }
        $merge = $createAssigner(function($object, $source, $srcIndex) {
        $baseMerge($object, $source, $srcIndex);
});
        $mergeWith = $createAssigner(function($object, $source, $srcIndex, $customizer) {
        $baseMerge($object, $source, $srcIndex, $customizer);
});
        $omit = $flatRest(function($object, $paths) {
        $result = [];
        if ($object == null) {
            return $result;
        }
        $isDeep = false;
        $paths = $arrayMap($paths, function($path) {
        $path = $castPath($path, $object);
        $isDeep || $isDeep = (is_array($path) ? count($path) : strlen($path)) > 1;
        return $path;
});
        $copyObject($object, $getAllKeysIn($object), $result);
        if ($isDeep) {
            $result = $baseClone($result, $CLONE_DEEP_FLAG | $CLONE_FLAT_FLAG | $CLONE_SYMBOLS_FLAG, $customOmitClone);
        }
        $length = (is_array($paths) ? count($paths) : strlen($paths));
        while ($length--) {
            $baseUnset($result, $paths[$length]);
        }
        return $result;
});
        function omitBy($object, $predicate) {
            return $pickBy($object, $negate($getIteratee($predicate)));
        }
        $pick = $flatRest(function($object, $paths) {
        return ($object == null ? [] : $basePick($object, $paths));
});
        function pickBy($object, $predicate) {
            if ($object == null) {
                return [];
            }
            $props = $arrayMap($getAllKeysIn($object), function($prop) {
        return [$prop];
});
            $predicate = $getIteratee($predicate);
            return $basePickBy($object, $props, function($value, $path) {
        return $predicate($value, $path[0]);
});
        }
        function result($object, $path, $defaultValue) {
            $path = $castPath($path, $object);
            $index = -1;
            $length = (is_array($path) ? count($path) : strlen($path));
            if (!$length) {
                $length = 1;
                $object = null;
            }
            while (++$index < $length) {
                $value = ($object == null ? null : $object[$toKey($path[$index])]);
                if ($value === null) {
                    $index = $length;
                    $value = $defaultValue;
                }
                $object = ($isFunction($value) ? call_user_func($value, $object) : $value);
            }
            return $object;
        }
        function set($object, $path, $value) {
            return ($object == null ? $object : $baseSet($object, $path, $value));
        }
        function setWith($object, $path, $value, $customizer) {
            $customizer = (is_callable($customizer) ? $customizer : null);
            return ($object == null ? $object : $baseSet($object, $path, $value, $customizer));
        }
        $toPairs = $createToPairs($keys);
        $toPairsIn = $createToPairs($keysIn);
        function transform($object, $iteratee, $accumulator) {
            $isArr = $isArray($object);
            $isArrLike = $isArr || $isBuffer($object) || $isTypedArray($object);
            $iteratee = $getIteratee($iteratee, 4);
            if ($accumulator == null) {
                $Ctor = $object && $object['constructor'];
                if ($isArrLike) {
                    $accumulator = ($isArr ? new $Ctor() : []);
                } else if ($isObject($object)) {
                    $accumulator = ($isFunction($Ctor) ? $baseCreate($getPrototype($object)) : []);
                } else {
                    $accumulator = [];
                }
            }
            ($isArrLike ? $arrayEach : $baseForOwn)($object, function($value, $index, $object) {
        return $iteratee($accumulator, $value, $index, $object);
});
            return $accumulator;
        }
        function _unset($object, $path) {
            return ($object == null ? true : $baseUnset($object, $path));
        }
        function update($object, $path, $updater) {
            return ($object == null ? $object : $baseUpdate($object, $path, $castFunction($updater)));
        }
        function updateWith($object, $path, $updater, $customizer) {
            $customizer = (is_callable($customizer) ? $customizer : null);
            return ($object == null ? $object : $baseUpdate($object, $path, $castFunction($updater), $customizer));
        }
        function values($object) {
            return ($object == null ? [] : $baseValues($object, $keys($object)));
        }
        function valuesIn($object) {
            return ($object == null ? [] : $baseValues($object, $keysIn($object)));
        }
        function clamp($number, $lower, $upper) {
            if ($upper === null) {
                $upper = $lower;
                $lower = null;
            }
            if ($upper !== null) {
                $upper = $toNumber($upper);
                $upper = ($upper === $upper ? $upper : 0);
            }
            if ($lower !== null) {
                $lower = $toNumber($lower);
                $lower = ($lower === $lower ? $lower : 0);
            }
            return $baseClamp($toNumber($number), $lower, $upper);
        }
        function inRange($number, $start, $end) {
            $start = $toFinite($start);
            if ($end === null) {
                $end = $start;
                $start = 0;
            } else {
                $end = $toFinite($end);
            }
            $number = $toNumber($number);
            return $baseInRange($number, $start, $end);
        }
        function random($lower, $upper, $floating) {
            if ($floating && !is_bool($floating) && $isIterateeCall($lower, $upper, $floating)) {
                $upper = $floating = null;
            }
            if ($floating === null) {
                if (is_bool($upper)) {
                    $floating = $upper;
                    $upper = null;
                } else if (is_bool($lower)) {
                    $floating = $lower;
                    $lower = null;
                }
            }
            if ($lower === null && $upper === null) {
                $lower = 0;
                $upper = 1;
            } else {
                $lower = $toFinite($lower);
                if ($upper === null) {
                    $upper = $lower;
                    $lower = 0;
                } else {
                    $upper = $toFinite($upper);
                }
            }
            if ($lower > $upper) {
                $temp = $lower;
                $lower = $upper;
                $upper = $temp;
            }
            if ($floating || $lower % 1 || $upper % 1) {
                $rand = $nativeRandom();
                return $nativeMin($lower + $rand * $upper - $lower + $freeParseFloat('1e-' + (is_array($rand + '') ? count($rand + '') : strlen($rand + '')) - 1), $upper);
            }
            return $baseRandom($lower, $upper);
        }
        $camelCase = $createCompounder(function($result, $word, $index) {
        $word = strtolower($word);
        return $result + ($index ? $capitalize($word) : $word);
});
        function capitalize($string) {
            return $upperFirst(strtolower($toString($string)));
        }
        function deburr($string) {
            $string = $toString($string);
            return $string && str_replace($reComboMark, '', str_replace($reLatin, $deburrLetter, $string));
        }
        function endsWith($string, $target, $position) {
            $string = $toString($string);
            $target = $baseToString($target);
            $length = (is_array($string) ? count($string) : strlen($string));
            $position = ($position === null ? $length : $baseClamp($toInteger($position), 0, $length));
            $end = $position;
            $position -= (is_array($target) ? count($target) : strlen($target));
            return $position >= 0 && array_slice($position, $end, $string) == $target;
        }
        function escape($string) {
            $string = $toString($string);
            return ($string && preg_match($string, $reHasUnescapedHtml) ? str_replace($reUnescapedHtml, $escapeHtmlChar, $string) : $string);
        }
        function escapeRegExp($string) {
            $string = $toString($string);
            return ($string && preg_match($string, $reHasRegExpChar) ? str_replace($reRegExpChar, '\\$&', $string) : $string);
        }
        $kebabCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? '-' : '') + strtolower($word);
});
        $lowerCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? ' ' : '') + strtolower($word);
});
        $lowerFirst = $createCaseFirst('toLowerCase');
        function pad($string, $length, $chars) {
            $string = $toString($string);
            $length = $toInteger($length);
            $strLength = ($length ? $stringSize($string) : 0);
            if (!$length || $strLength >= $length) {
                return $string;
            }
            $mid = $length - $strLength / 2;
            return $createPadding($nativeFloor($mid), $chars) + $string + $createPadding($nativeCeil($mid), $chars);
        }
        function padEnd($string, $length, $chars) {
            $string = $toString($string);
            $length = $toInteger($length);
            $strLength = ($length ? $stringSize($string) : 0);
            return ($length && $strLength < $length ? $string + $createPadding($length - $strLength, $chars) : $string);
        }
        function padStart($string, $length, $chars) {
            $string = $toString($string);
            $length = $toInteger($length);
            $strLength = ($length ? $stringSize($string) : 0);
            return ($length && $strLength < $length ? $createPadding($length - $strLength, $chars) + $string : $string);
        }
        function parseInt($string, $radix, $guard) {
            if ($guard || $radix == null) {
                $radix = 0;
            } else if ($radix) {
                $radix = +$radix;
            }
            return $nativeParseInt(str_replace($reTrimStart, '', $toString($string)), $radix || 0);
        }
        function repeat($string, $n, $guard) {
            if (($guard ? $isIterateeCall($string, $n, $guard) : $n === null)) {
                $n = 1;
            } else {
                $n = $toInteger($n);
            }
            return $baseRepeat($toString($string), $n);
        }
        function replace() {
            $args = $arguments;
            $string = $toString($args[0]);
            return ((is_array($args) ? count($args) : strlen($args)) < 3 ? $string : str_replace($args[1], $args[2], $string));
        }
        $snakeCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? '_' : '') + strtolower($word);
});
        function split($string, $separator, $limit) {
            if ($limit && !is_numeric($limit) && $isIterateeCall($string, $separator, $limit)) {
                $separator = $limit = null;
            }
            $limit = ($limit === null ? $MAX_ARRAY_LENGTH : $limit >> 0);
            if (!$limit) {
                return [];
            }
            $string = $toString($string);
            if ($string && is_string($separator) || $separator != null && !$isRegExp($separator)) {
                $separator = $baseToString($separator);
                if (!$separator && $hasUnicode($string)) {
                    return $castSlice($stringToArray($string), 0, $limit);
                }
            }
            return explode($separator, $limit, $string);
        }
        $startCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? ' ' : '') + $upperFirst($word);
});
        function startsWith($string, $target, $position) {
            $string = $toString($string);
            $position = ($position == null ? 0 : $baseClamp($toInteger($position), 0, (is_array($string) ? count($string) : strlen($string))));
            $target = $baseToString($target);
            return array_slice($position, $position + (is_array($target) ? count($target) : strlen($target)), $string) == $target;
        }
        function template($string, $options, $guard) {
            $settings = $lodash['templateSettings'];
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
            throw new $Error($INVALID_TEMPL_IMPORTS_ERROR_TEXT);
        }
});
            $isEscaping = null;
            $isEvaluating = null;
            $index = 0;
            $interpolate = $options['interpolate'] || $reNoMatch;
            $source = "__p += '";
            $reDelimiters = '/' . $options['escape'] || $reNoMatch['source'] + '|' + $interpolate['source'] + '|' + ($interpolate === $reInterpolate ? $reEsTemplate : $reNoMatch)['source'] + '|' + $options['evaluate'] || $reNoMatch['source'] + '|$' . '/' . 'g';
            $sourceURL = '//# sourceURL=' + (call_user_func($hasOwnProperty, $options, 'sourceURL') ? str_replace('/\\s/g', ' ', $options['sourceURL'] + '') : 'lodash.templateSources[' + ++$templateCounter + ']') + '\n';
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
                throw new $Error($INVALID_TEMPL_VAR_ERROR_TEXT);
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
        function toLower($value) {
            return strtolower($toString($value));
        }
        function toUpper($value) {
            return strtoupper($toString($value));
        }
        function _trim($string, $chars, $guard) {
            $string = $toString($string);
            if ($string && $guard || $chars === null) {
                return $baseTrim($string);
            }
            if (!$string || !$chars = $baseToString($chars)) {
                return $string;
            }
            $strSymbols = $stringToArray($string);
            $chrSymbols = $stringToArray($chars);
            $start = $charsStartIndex($strSymbols, $chrSymbols);
            $end = $charsEndIndex($strSymbols, $chrSymbols) + 1;
            return implode('', $castSlice($strSymbols, $start, $end));
        }
        function trimEnd($string, $chars, $guard) {
            $string = $toString($string);
            if ($string && $guard || $chars === null) {
                return array_slice(0, $trimmedEndIndex($string) + 1, $string);
            }
            if (!$string || !$chars = $baseToString($chars)) {
                return $string;
            }
            $strSymbols = $stringToArray($string);
            $end = $charsEndIndex($strSymbols, $stringToArray($chars)) + 1;
            return implode('', $castSlice($strSymbols, 0, $end));
        }
        function trimStart($string, $chars, $guard) {
            $string = $toString($string);
            if ($string && $guard || $chars === null) {
                return str_replace($reTrimStart, '', $string);
            }
            if (!$string || !$chars = $baseToString($chars)) {
                return $string;
            }
            $strSymbols = $stringToArray($string);
            $start = $charsStartIndex($strSymbols, $stringToArray($chars));
            return implode('', $castSlice($strSymbols, $start));
        }
        function truncate($string, $options) {
            $length = $DEFAULT_TRUNC_LENGTH;
            $omission = $DEFAULT_TRUNC_OMISSION;
            if ($isObject($options)) {
                $separator = ((is_array($options) ? (array_key_exists('separator', $options) || in_array('separator', $options)) : false) ? $options['separator'] : $separator);
                $length = ((is_array($options) ? (array_key_exists('length', $options) || in_array('length', $options)) : false) ? $toInteger((is_array($options) ? count($options) : strlen($options))) : $length);
                $omission = ((is_array($options) ? (array_key_exists('omission', $options) || in_array('omission', $options)) : false) ? $baseToString($options['omission']) : $omission);
            }
            $string = $toString($string);
            $strLength = (is_array($string) ? count($string) : strlen($string));
            if ($hasUnicode($string)) {
                $strSymbols = $stringToArray($string);
                $strLength = (is_array($strSymbols) ? count($strSymbols) : strlen($strSymbols));
            }
            if ($length >= $strLength) {
                return $string;
            }
            $end = $length - $stringSize($omission);
            if ($end < 1) {
                return $omission;
            }
            $result = ($strSymbols ? implode('', $castSlice($strSymbols, 0, $end)) : array_slice(0, $end, $string));
            if ($separator === null) {
                return $result + $omission;
            }
            if ($strSymbols) {
                $end += (is_array($result) ? count($result) : strlen($result)) - $end;
            }
            if ($isRegExp($separator)) {
                if (array_slice($end, $string)['search']($separator)) {
                    $match = null;
                    $substring = $result;
                    if (!$separator['global']) {
                        $separator = '/' . $separator['source'] . '/' . $toString(preg_match($reFlags, $separator)) + 'g';
                    }
                    $separator['lastIndex'] = 0;
                    while ($match = preg_match($separator, $substring)) {
                        $newEnd = $match['index'];
                    }
                    $result = array_slice(0, ($newEnd === null ? $end : $newEnd), $result);
                }
            } else if (array_search($baseToString($separator), $end, $string) != $end) {
                $index = $result['lastIndexOf']($separator);
                if ($index > -1) {
                    $result = array_slice(0, $index, $result);
                }
            }
            return $result + $omission;
        }
        function unescape($string) {
            $string = $toString($string);
            return ($string && preg_match($string, $reHasEscapedHtml) ? str_replace($reEscapedHtml, $unescapeHtmlChar, $string) : $string);
        }
        $upperCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? ' ' : '') + strtoupper($word);
});
        $upperFirst = $createCaseFirst('toUpperCase');
        function words($string, $pattern, $guard) {
            $string = $toString($string);
            $pattern = ($guard ? null : $pattern);
            if ($pattern === null) {
                return ($hasUnicodeWord($string) ? $unicodeWords($string) : $asciiWords($string));
            }
            return $string['match']($pattern) || [];
        }
        $attempt = $baseRest(function($func, $args) {
        try {
            return $apply($func, null, $args);
        } catch (\Throwable $e) {
            return ($isError($e) ? $e : new $Error($e));
        }
});
        $bindAll = $flatRest(function($object, $methodNames) {
        $arrayEach($methodNames, function($key) {
        $key = $toKey($key);
        $baseAssignValue($object, $key, $bind($object[$key], $object));
});
        return $object;
});
        function cond($pairs) {
            $length = ($pairs == null ? 0 : (is_array($pairs) ? count($pairs) : strlen($pairs)));
            $toIteratee = $getIteratee();
            $pairs = (!$length ? [] : $arrayMap($pairs, function($pair) {
        if (!is_callable($pair[1])) {
            throw new $TypeError($FUNC_ERROR_TEXT);
        }
        return [$toIteratee($pair[0]), $pair[1]];
}));
            return $baseRest(function($args) {
        $index = -1;
        while (++$index < $length) {
            $pair = $pairs[$index];
            if ($apply($pair[0], $this, $args)) {
                return $apply($pair[1], $this, $args);
            }
        }
});
        }
        function conforms($source) {
            return $baseConforms($baseClone($source, $CLONE_DEEP_FLAG));
        }
        function _constant($value) {
            return function() {
        return $value;
};
        }
        function defaultTo($value, $defaultValue) {
            return ($value == null || $value !== $value ? $defaultValue : $value);
        }
        $flow = $createFlow();
        $flowRight = $createFlow(true);
        function identity($value) {
            return $value;
        }
        function iteratee($func) {
            return $baseIteratee((is_callable($func) ? $func : $baseClone($func, $CLONE_DEEP_FLAG)));
        }
        function matches($source) {
            return $baseMatches($baseClone($source, $CLONE_DEEP_FLAG));
        }
        function matchesProperty($path, $srcValue) {
            return $baseMatchesProperty($path, $baseClone($srcValue, $CLONE_DEEP_FLAG));
        }
        $method = $baseRest(function($path, $args) {
        return function($object) {
        return $baseInvoke($object, $path, $args);
};
});
        $methodOf = $baseRest(function($object, $args) {
        return function($path) {
        return $baseInvoke($object, $path, $args);
};
});
        function mixin($object, $source, $options) {
            $props = $keys($source);
            $methodNames = $baseFunctions($source, $props);
            if ($options == null && !$isObject($source) && (is_array($methodNames) ? count($methodNames) : strlen($methodNames)) || !(is_array($props) ? count($props) : strlen($props))) {
                $options = $source;
                $source = $object;
                $object = $this;
                $methodNames = $baseFunctions($source, $keys($source));
            }
            $chain = !$isObject($options) && (is_array($options) ? (array_key_exists('chain', $options) || in_array('chain', $options)) : false) || !!$options['chain'];
            $isFunc = $isFunction($object);
            $arrayEach($methodNames, function($methodName) {
        $func = $source[$methodName];
        $object[$methodName] = $func;
        if ($isFunc) {
            $object['prototype'][$methodName] = function() {
        $chainAll = $this->__chain__;
        if ($chain || $chainAll) {
            $result = $object($this->__wrapped__);
            $actions = $result['__actions__'] = $copyArray($this->__actions__);
            $actions[] = [
                'func' => $func,
                'args' => $arguments,
                'thisArg' => $object
            ];
            $result['__chain__'] = $chainAll;
            return $result;
        }
        return $func['apply']($object, $arrayPush([$this->value()], $arguments));
};
        }
});
            return $object;
        }
        function noConflict() {
            if ($root['_'] === $this) {
                $root['_'] = $oldDash;
            }
            return $this;
        }
        function noop() {}
        function nthArg($n) {
            $n = $toInteger($n);
            return $baseRest(function($args) {
        return $baseNth($args, $n);
});
        }
        $over = $createOver($arrayMap);
        $overEvery = $createOver($arrayEvery);
        $overSome = $createOver($arraySome);
        function property($path) {
            return ($isKey($path) ? $baseProperty($toKey($path)) : $basePropertyDeep($path));
        }
        function propertyOf($object) {
            return function($path) {
        return ($object == null ? null : $baseGet($object, $path));
};
        }
        $range = $createRange();
        $rangeRight = $createRange(true);
        function stubArray() {
            return [];
        }
        function stubFalse() {
            return false;
        }
        function stubObject() {
            return [];
        }
        function stubString() {
            return '';
        }
        function stubTrue() {
            return true;
        }
        function times($n, $iteratee) {
            $n = $toInteger($n);
            if ($n < 1 || $n > $MAX_SAFE_INTEGER) {
                return [];
            }
            $index = $MAX_ARRAY_LENGTH;
            $length = $nativeMin($n, $MAX_ARRAY_LENGTH);
            $iteratee = $getIteratee($iteratee);
            $n -= $MAX_ARRAY_LENGTH;
            $result = $baseTimes($length, $iteratee);
            while (++$index < $n) {
                $iteratee($index);
            }
            return $result;
        }
        function toPath($value) {
            if ($isArray($value)) {
                return $arrayMap($value, $toKey);
            }
            return ($isSymbol($value) ? [$value] : $copyArray($stringToPath($toString($value))));
        }
        function uniqueId($prefix) {
            $id = ++$idCounter;
            return $toString($prefix) + $id;
        }
        $add = $createMathOperation(function($augend, $addend) {
        return $augend + $addend;
}, 0);
        $ceil = $createRound('ceil');
        $divide = $createMathOperation(function($dividend, $divisor) {
        return $dividend / $divisor;
}, 1);
        $floor = $createRound('floor');
        function _max($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $identity, $baseGt) : null);
        }
        function maxBy($array, $iteratee) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $getIteratee($iteratee, 2), $baseGt) : null);
        }
        function mean($array) {
            return $baseMean($array, $identity);
        }
        function meanBy($array, $iteratee) {
            return $baseMean($array, $getIteratee($iteratee, 2));
        }
        function _min($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $identity, $baseLt) : null);
        }
        function minBy($array, $iteratee) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $getIteratee($iteratee, 2), $baseLt) : null);
        }
        $multiply = $createMathOperation(function($multiplier, $multiplicand) {
        return $multiplier * $multiplicand;
}, 1);
        $round = $createRound('round');
        $subtract = $createMathOperation(function($minuend, $subtrahend) {
        return $minuend - $subtrahend;
}, 0);
        function sum($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSum($array, $identity) : 0);
        }
        function sumBy($array, $iteratee) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSum($array, $getIteratee($iteratee, 2)) : 0);
        }
        $lodash['after'] = $after;
        $lodash['ary'] = $ary;
        $lodash['assign'] = $assign;
        $lodash['assignIn'] = $assignIn;
        $lodash['assignInWith'] = $assignInWith;
        $lodash['assignWith'] = $assignWith;
        $lodash['at'] = $at;
        $lodash['before'] = $before;
        $lodash['bind'] = $bind;
        $lodash['bindAll'] = $bindAll;
        $lodash['bindKey'] = $bindKey;
        $lodash['castArray'] = $castArray;
        $lodash['chain'] = $chain;
        $lodash['chunk'] = $chunk;
        $lodash['compact'] = $compact;
        $lodash['concat'] = $concat;
        $lodash['cond'] = $cond;
        $lodash['conforms'] = $conforms;
        $lodash['constant'] = $constant;
        $lodash['countBy'] = $countBy;
        $lodash['create'] = $create;
        $lodash['curry'] = $curry;
        $lodash['curryRight'] = $curryRight;
        $lodash['debounce'] = $debounce;
        $lodash['defaults'] = $defaults;
        $lodash['defaultsDeep'] = $defaultsDeep;
        $lodash['defer'] = $defer;
        $lodash['delay'] = $delay;
        $lodash['difference'] = $difference;
        $lodash['differenceBy'] = $differenceBy;
        $lodash['differenceWith'] = $differenceWith;
        $lodash['drop'] = $drop;
        $lodash['dropRight'] = $dropRight;
        $lodash['dropRightWhile'] = $dropRightWhile;
        $lodash['dropWhile'] = $dropWhile;
        $lodash['fill'] = $fill;
        $lodash['filter'] = $filter;
        $lodash['flatMap'] = $flatMap;
        $lodash['flatMapDeep'] = $flatMapDeep;
        $lodash['flatMapDepth'] = $flatMapDepth;
        $lodash['flatten'] = $flatten;
        $lodash['flattenDeep'] = $flattenDeep;
        $lodash['flattenDepth'] = $flattenDepth;
        $lodash['flip'] = $flip;
        $lodash['flow'] = $flow;
        $lodash['flowRight'] = $flowRight;
        $lodash['fromPairs'] = $fromPairs;
        $lodash['functions'] = $functions;
        $lodash['functionsIn'] = $functionsIn;
        $lodash['groupBy'] = $groupBy;
        $lodash['initial'] = $initial;
        $lodash['intersection'] = $intersection;
        $lodash['intersectionBy'] = $intersectionBy;
        $lodash['intersectionWith'] = $intersectionWith;
        $lodash['invert'] = $invert;
        $lodash['invertBy'] = $invertBy;
        $lodash['invokeMap'] = $invokeMap;
        $lodash['iteratee'] = $iteratee;
        $lodash['keyBy'] = $keyBy;
        $lodash['keys'] = $keys;
        $lodash['keysIn'] = $keysIn;
        $lodash['map'] = $map;
        $lodash['mapKeys'] = $mapKeys;
        $lodash['mapValues'] = $mapValues;
        $lodash['matches'] = $matches;
        $lodash['matchesProperty'] = $matchesProperty;
        $lodash['memoize'] = $memoize;
        $lodash['merge'] = $merge;
        $lodash['mergeWith'] = $mergeWith;
        $lodash['method'] = $method;
        $lodash['methodOf'] = $methodOf;
        $lodash['mixin'] = $mixin;
        $lodash['negate'] = $negate;
        $lodash['nthArg'] = $nthArg;
        $lodash['omit'] = $omit;
        $lodash['omitBy'] = $omitBy;
        $lodash['once'] = $once;
        $lodash['orderBy'] = $orderBy;
        $lodash['over'] = $over;
        $lodash['overArgs'] = $overArgs;
        $lodash['overEvery'] = $overEvery;
        $lodash['overSome'] = $overSome;
        $lodash['partial'] = $partial;
        $lodash['partialRight'] = $partialRight;
        $lodash['partition'] = $partition;
        $lodash['pick'] = $pick;
        $lodash['pickBy'] = $pickBy;
        $lodash['property'] = $property;
        $lodash['propertyOf'] = $propertyOf;
        $lodash['pull'] = $pull;
        $lodash['pullAll'] = $pullAll;
        $lodash['pullAllBy'] = $pullAllBy;
        $lodash['pullAllWith'] = $pullAllWith;
        $lodash['pullAt'] = $pullAt;
        $lodash['range'] = $range;
        $lodash['rangeRight'] = $rangeRight;
        $lodash['rearg'] = $rearg;
        $lodash['reject'] = $reject;
        $lodash['remove'] = $remove;
        $lodash['rest'] = $rest;
        $lodash['reverse'] = $reverse;
        $lodash['sampleSize'] = $sampleSize;
        $lodash['set'] = $set;
        $lodash['setWith'] = $setWith;
        $lodash['shuffle'] = $shuffle;
        $lodash['slice'] = $slice;
        $lodash['sortBy'] = $sortBy;
        $lodash['sortedUniq'] = $sortedUniq;
        $lodash['sortedUniqBy'] = $sortedUniqBy;
        $lodash['split'] = $split;
        $lodash['spread'] = $spread;
        $lodash['tail'] = $tail;
        $lodash['take'] = $take;
        $lodash['takeRight'] = $takeRight;
        $lodash['takeRightWhile'] = $takeRightWhile;
        $lodash['takeWhile'] = $takeWhile;
        $lodash['tap'] = $tap;
        $lodash['throttle'] = $throttle;
        $lodash['thru'] = $thru;
        $lodash['toArray'] = $toArray;
        $lodash['toPairs'] = $toPairs;
        $lodash['toPairsIn'] = $toPairsIn;
        $lodash['toPath'] = $toPath;
        $lodash['toPlainObject'] = $toPlainObject;
        $lodash['transform'] = $transform;
        $lodash['unary'] = $unary;
        $lodash['union'] = $union;
        $lodash['unionBy'] = $unionBy;
        $lodash['unionWith'] = $unionWith;
        $lodash['uniq'] = $uniq;
        $lodash['uniqBy'] = $uniqBy;
        $lodash['uniqWith'] = $uniqWith;
        $lodash['unset'] = $unset;
        $lodash['unzip'] = $unzip;
        $lodash['unzipWith'] = $unzipWith;
        $lodash['update'] = $update;
        $lodash['updateWith'] = $updateWith;
        $lodash['values'] = $values;
        $lodash['valuesIn'] = $valuesIn;
        $lodash['without'] = $without;
        $lodash['words'] = $words;
        $lodash['wrap'] = $wrap;
        $lodash['xor'] = $xor;
        $lodash['xorBy'] = $xorBy;
        $lodash['xorWith'] = $xorWith;
        $lodash['zip'] = $zip;
        $lodash['zipObject'] = $zipObject;
        $lodash['zipObjectDeep'] = $zipObjectDeep;
        $lodash['zipWith'] = $zipWith;
        $lodash['entries'] = $toPairs;
        $lodash['entriesIn'] = $toPairsIn;
        $lodash['extend'] = $assignIn;
        $lodash['extendWith'] = $assignInWith;
        $mixin($lodash, $lodash);
        $lodash['add'] = $add;
        $lodash['attempt'] = $attempt;
        $lodash['camelCase'] = $camelCase;
        $lodash['capitalize'] = $capitalize;
        $lodash['ceil'] = $ceil;
        $lodash['clamp'] = $clamp;
        $lodash['clone'] = $clone;
        $lodash['cloneDeep'] = $cloneDeep;
        $lodash['cloneDeepWith'] = $cloneDeepWith;
        $lodash['cloneWith'] = $cloneWith;
        $lodash['conformsTo'] = $conformsTo;
        $lodash['deburr'] = $deburr;
        $lodash['defaultTo'] = $defaultTo;
        $lodash['divide'] = $divide;
        $lodash['endsWith'] = $endsWith;
        $lodash['eq'] = $eq;
        $lodash['escape'] = $escape;
        $lodash['escapeRegExp'] = $escapeRegExp;
        $lodash['every'] = $every;
        $lodash['find'] = $find;
        $lodash['findIndex'] = $findIndex;
        $lodash['findKey'] = $findKey;
        $lodash['findLast'] = $findLast;
        $lodash['findLastIndex'] = $findLastIndex;
        $lodash['findLastKey'] = $findLastKey;
        $lodash['floor'] = $floor;
        $lodash['forEach'] = $forEach;
        $lodash['forEachRight'] = $forEachRight;
        $lodash['forIn'] = $forIn;
        $lodash['forInRight'] = $forInRight;
        $lodash['forOwn'] = $forOwn;
        $lodash['forOwnRight'] = $forOwnRight;
        $lodash['get'] = $get;
        $lodash['gt'] = $gt;
        $lodash['gte'] = $gte;
        $lodash['has'] = $has;
        $lodash['hasIn'] = $hasIn;
        $lodash['head'] = $head;
        $lodash['identity'] = $identity;
        $lodash['includes'] = $includes;
        $lodash['indexOf'] = $indexOf;
        $lodash['inRange'] = $inRange;
        $lodash['invoke'] = $invoke;
        $lodash['isArguments'] = $isArguments;
        $lodash['isArray'] = $isArray;
        $lodash['isArrayBuffer'] = $isArrayBuffer;
        $lodash['isArrayLike'] = $isArrayLike;
        $lodash['isArrayLikeObject'] = $isArrayLikeObject;
        $lodash['isBoolean'] = $isBoolean;
        $lodash['isBuffer'] = $isBuffer;
        $lodash['isDate'] = $isDate;
        $lodash['isElement'] = $isElement;
        $lodash['isEmpty'] = $isEmpty;
        $lodash['isEqual'] = $isEqual;
        $lodash['isEqualWith'] = $isEqualWith;
        $lodash['isError'] = $isError;
        $lodash['isFinite'] = $isFinite;
        $lodash['isFunction'] = $isFunction;
        $lodash['isInteger'] = $isInteger;
        $lodash['isLength'] = $isLength;
        $lodash['isMap'] = $isMap;
        $lodash['isMatch'] = $isMatch;
        $lodash['isMatchWith'] = $isMatchWith;
        $lodash['isNaN'] = $isNaN;
        $lodash['isNative'] = $isNative;
        $lodash['isNil'] = $isNil;
        $lodash['isNull'] = $isNull;
        $lodash['isNumber'] = $isNumber;
        $lodash['isObject'] = $isObject;
        $lodash['isObjectLike'] = $isObjectLike;
        $lodash['isPlainObject'] = $isPlainObject;
        $lodash['isRegExp'] = $isRegExp;
        $lodash['isSafeInteger'] = $isSafeInteger;
        $lodash['isSet'] = $isSet;
        $lodash['isString'] = $isString;
        $lodash['isSymbol'] = $isSymbol;
        $lodash['isTypedArray'] = $isTypedArray;
        $lodash['isUndefined'] = $isUndefined;
        $lodash['isWeakMap'] = $isWeakMap;
        $lodash['isWeakSet'] = $isWeakSet;
        $lodash['join'] = $join;
        $lodash['kebabCase'] = $kebabCase;
        $lodash['last'] = $last;
        $lodash['lastIndexOf'] = $lastIndexOf;
        $lodash['lowerCase'] = $lowerCase;
        $lodash['lowerFirst'] = $lowerFirst;
        $lodash['lt'] = $lt;
        $lodash['lte'] = $lte;
        $lodash['max'] = $max;
        $lodash['maxBy'] = $maxBy;
        $lodash['mean'] = $mean;
        $lodash['meanBy'] = $meanBy;
        $lodash['min'] = $min;
        $lodash['minBy'] = $minBy;
        $lodash['stubArray'] = $stubArray;
        $lodash['stubFalse'] = $stubFalse;
        $lodash['stubObject'] = $stubObject;
        $lodash['stubString'] = $stubString;
        $lodash['stubTrue'] = $stubTrue;
        $lodash['multiply'] = $multiply;
        $lodash['nth'] = $nth;
        $lodash['noConflict'] = $noConflict;
        $lodash['noop'] = $noop;
        $lodash['now'] = $now;
        $lodash['pad'] = $pad;
        $lodash['padEnd'] = $padEnd;
        $lodash['padStart'] = $padStart;
        $lodash['parseInt'] = $parseInt;
        $lodash['random'] = $random;
        $lodash['reduce'] = $reduce;
        $lodash['reduceRight'] = $reduceRight;
        $lodash['repeat'] = $repeat;
        $lodash['replace'] = $replace;
        $lodash['result'] = $result;
        $lodash['round'] = $round;
        $lodash['runInContext'] = $runInContext;
        $lodash['sample'] = $sample;
        $lodash['size'] = $size;
        $lodash['snakeCase'] = $snakeCase;
        $lodash['some'] = $some;
        $lodash['sortedIndex'] = $sortedIndex;
        $lodash['sortedIndexBy'] = $sortedIndexBy;
        $lodash['sortedIndexOf'] = $sortedIndexOf;
        $lodash['sortedLastIndex'] = $sortedLastIndex;
        $lodash['sortedLastIndexBy'] = $sortedLastIndexBy;
        $lodash['sortedLastIndexOf'] = $sortedLastIndexOf;
        $lodash['startCase'] = $startCase;
        $lodash['startsWith'] = $startsWith;
        $lodash['subtract'] = $subtract;
        $lodash['sum'] = $sum;
        $lodash['sumBy'] = $sumBy;
        $lodash['template'] = $template;
        $lodash['times'] = $times;
        $lodash['toFinite'] = $toFinite;
        $lodash['toInteger'] = $toInteger;
        $lodash['toLength'] = $toLength;
        $lodash['toLower'] = $toLower;
        $lodash['toNumber'] = $toNumber;
        $lodash['toSafeInteger'] = $toSafeInteger;
        $lodash['toString'] = $toString;
        $lodash['toUpper'] = $toUpper;
        $lodash['trim'] = $trim;
        $lodash['trimEnd'] = $trimEnd;
        $lodash['trimStart'] = $trimStart;
        $lodash['truncate'] = $truncate;
        $lodash['unescape'] = $unescape;
        $lodash['uniqueId'] = $uniqueId;
        $lodash['upperCase'] = $upperCase;
        $lodash['upperFirst'] = $upperFirst;
        $lodash['each'] = $forEach;
        $lodash['eachRight'] = $forEachRight;
        $lodash['first'] = $head;
        $mixin($lodash, (function() {
        $source = [];
        $baseForOwn($lodash, function($func, $methodName) {
        if (!call_user_func($hasOwnProperty, $lodash['prototype'], $methodName)) {
            $source[$methodName] = $func;
        }
});
        return $source;
})(), [
            'chain' => false
        ]);
        $lodash['VERSION'] = $VERSION;
        $arrayEach(['bind', 'bindKey', 'curry', 'curryRight', 'partial', 'partialRight'], function($methodName) {
        $lodash[$methodName]['placeholder'] = $lodash;
});
        $arrayEach(['drop', 'take'], function($methodName, $index) {
        $LazyWrapper['prototype'][$methodName] = function($n) {
        $n = ($n === null ? 1 : $nativeMax($toInteger($n), 0));
        $result = ($this->__filtered__ && !$index ? new $LazyWrapper($this) : $this->clone());
        if ($result['__filtered__']) {
            $result['__takeCount__'] = $nativeMin($n, $result['__takeCount__']);
        } else {
            $result['__views__'][] = [
                'size' => $nativeMin($n, $MAX_ARRAY_LENGTH),
                'type' => $methodName + ($result['__dir__'] < 0 ? 'Right' : '')
            ];
        }
        return $result;
};
        $LazyWrapper['prototype'][$methodName + 'Right'] = function($n) {
        return array_reverse(array_reverse($this)[$methodName]($n));
};
});
        $arrayEach(['filter', 'map', 'takeWhile'], function($methodName, $index) {
        $type = $index + 1;
        $isFilter = $type == $LAZY_FILTER_FLAG || $type == $LAZY_WHILE_FLAG;
        $LazyWrapper['prototype'][$methodName] = function($iteratee) {
        $result = $this->clone();
        $result['__iteratees__'][] = [
            'iteratee' => $getIteratee($iteratee, 3),
            'type' => $type
        ];
        $result['__filtered__'] = $result['__filtered__'] || $isFilter;
        return $result;
};
});
        $arrayEach(['head', 'last'], function($methodName, $index) {
        $takeName = 'take' + ($index ? 'Right' : '');
        $LazyWrapper['prototype'][$methodName] = function() {
        return $this[$takeName](1)['value']()[0];
};
});
        $arrayEach(['initial', 'tail'], function($methodName, $index) {
        $dropName = 'drop' + ($index ? '' : 'Right');
        $LazyWrapper['prototype'][$methodName] = function() {
        return ($this->__filtered__ ? new $LazyWrapper($this) : $this[$dropName](1));
};
});
        $LazyWrapper['prototype']['compact'] = function() {
        return array_filter($identity, $this);
};
        $LazyWrapper['prototype']['find'] = function($predicate) {
        return array_filter($predicate, $this)['head']();
};
        $LazyWrapper['prototype']['findLast'] = function($predicate) {
        return array_reverse($this)['find']($predicate);
};
        $LazyWrapper['prototype']['invokeMap'] = $baseRest(function($path, $args) {
        if (is_callable($path)) {
            return new $LazyWrapper($this);
        }
        return array_map(function($value) {
        return $baseInvoke($value, $path, $args);
}, $this);
});
        $LazyWrapper['prototype']['reject'] = function($predicate) {
        return array_filter($negate($getIteratee($predicate)), $this);
};
        $LazyWrapper['prototype']['slice'] = function($start, $end) {
        $start = $toInteger($start);
        $result = $this;
        if ($result['__filtered__'] && $start > 0 || $end < 0) {
            return new $LazyWrapper($result);
        }
        if ($start < 0) {
            $result = $result['takeRight'](-$start);
        } else if ($start) {
            $result = $result['drop']($start);
        }
        if ($end !== null) {
            $end = $toInteger($end);
            $result = ($end < 0 ? $result['dropRight'](-$end) : $result['take']($end - $start));
        }
        return $result;
};
        $LazyWrapper['prototype']['takeRightWhile'] = function($predicate) {
        return array_reverse(array_reverse($this)['takeWhile']($predicate));
};
        $LazyWrapper['prototype']['toArray'] = function() {
        return $this->take($MAX_ARRAY_LENGTH);
};
        $baseForOwn($LazyWrapper['prototype'], function($func, $methodName) {
        $checkIteratee = preg_match($methodName, '/^(?:filter|find|map|reject)|While$/');
        $isTaker = preg_match($methodName, '/^(?:head|last)$/');
        $lodashFunc = $lodash[($isTaker ? 'take' + ($methodName == 'last' ? 'Right' : '') : $methodName)];
        $retUnwrapped = $isTaker || preg_match($methodName, '/^find/');
        if (!$lodashFunc) {
            return;
        }
        $lodash['prototype'][$methodName] = function() {
        $value = $this->__wrapped__;
        $args = ($isTaker ? [1] : $arguments);
        $isLazy = $value instanceof $LazyWrapper;
        $iteratee = $args[0];
        $useLazy = $isLazy || $isArray($value);
        $interceptor = function($value) {
        $result = $lodashFunc['apply']($lodash, $arrayPush([$value], $args));
        return ($isTaker && $chainAll ? $result[0] : $result);
};
        if ($useLazy && $checkIteratee && is_callable($iteratee) && (is_array($iteratee) ? count($iteratee) : strlen($iteratee)) != 1) {
            $isLazy = $useLazy = false;
        }
        $chainAll = $this->__chain__;
        $isHybrid = !!(is_array($this->__actions__) ? count($this->__actions__) : strlen($this->__actions__));
        $isUnwrapped = $retUnwrapped && !$chainAll;
        $onlyLazy = $isLazy && !$isHybrid;
        if (!$retUnwrapped && $useLazy) {
            $value = ($onlyLazy ? $value : new $LazyWrapper($this));
            $result = $func['apply']($value, $args);
            $result['__actions__'][] = [
                'func' => $thru,
                'args' => [$interceptor],
                'thisArg' => null
            ];
            return new $LodashWrapper($result, $chainAll);
        }
        if ($isUnwrapped && $onlyLazy) {
            return $func['apply']($this, $args);
        }
        $result = $this->thru($interceptor);
        return ($isUnwrapped ? ($isTaker ? $result['value']()[0] : $result['value']()) : $result);
};
});
        $arrayEach(['pop', 'push', 'shift', 'sort', 'splice', 'unshift'], function($methodName) {
        $func = $arrayProto[$methodName];
        $chainName = (preg_match($methodName, '/^(?:push|sort|unshift)$/') ? 'tap' : 'thru');
        $retUnwrapped = preg_match($methodName, '/^(?:pop|shift)$/');
        $lodash['prototype'][$methodName] = function() {
        $args = $arguments;
        if ($retUnwrapped && !$this->__chain__) {
            $value = $this->value();
            return $func['apply'](($isArray($value) ? $value : []), $args);
        }
        return $this[$chainName](function($value) {
        return $func['apply'](($isArray($value) ? $value : []), $args);
});
};
});
        $baseForOwn($LazyWrapper['prototype'], function($func, $methodName) {
        $lodashFunc = $lodash[$methodName];
        if ($lodashFunc) {
            $key = $lodashFunc['name'] + '';
            if (!call_user_func($hasOwnProperty, $realNames, $key)) {
                $realNames[$key] = [];
            }
            $realNames[$key][] = [
                'name' => $methodName,
                'func' => $lodashFunc
            ];
        }
});
        $realNames[$createHybrid(null, $WRAP_BIND_KEY_FLAG)['name']] = [[
            'name' => 'wrapper',
            'func' => null
        ]];
        $LazyWrapper['prototype']['clone'] = $lazyClone;
        $LazyWrapper['prototype']['reverse'] = $lazyReverse;
        $LazyWrapper['prototype']['value'] = $lazyValue;
        $lodash['prototype']['at'] = $wrapperAt;
        $lodash['prototype']['chain'] = $wrapperChain;
        $lodash['prototype']['commit'] = $wrapperCommit;
        $lodash['prototype']['next'] = $wrapperNext;
        $lodash['prototype']['plant'] = $wrapperPlant;
        $lodash['prototype']['reverse'] = $wrapperReverse;
        $lodash['prototype']['toJSON'] = $lodash['prototype']['valueOf'] = $lodash['prototype']['value'] = $wrapperValue;
        $lodash['prototype']['first'] = $lodash['prototype']['head'];
        if ($symIterator) {
            $lodash['prototype'][$symIterator] = $wrapperToIterator;
        }
        return $lodash;
};
        $_ = $runInContext();
        if (is_callable($define) && (is_object($define['amd']) || is_array($define['amd'])) && $define['amd']) {
            $root['_'] = $_;
            $define(function() {
        return $_;
});
        } else if ($freeModule) {
            $freeModule['exports'] = $_['_'] = $_;
            $freeExports['_'] = $_;
        } else {
            $root['_'] = $_;
        }
}, $this);

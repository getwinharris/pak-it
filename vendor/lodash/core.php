<?php
;
call_user_func(function() {
        $undefined = null;
        $VERSION = '4.18.1';
        $FUNC_ERROR_TEXT = 'Expected a function';
        $COMPARE_PARTIAL_FLAG = 1;
        $COMPARE_UNORDERED_FLAG = 2;
        $WRAP_BIND_FLAG = 1;
        $WRAP_PARTIAL_FLAG = 32;
        $INFINITY = 1 / 0;
        $MAX_SAFE_INTEGER = 9007199254740991;
        $argsTag = '[object Arguments]';
        $arrayTag = '[object Array]';
        $asyncTag = '[object AsyncFunction]';
        $boolTag = '[object Boolean]';
        $dateTag = '[object Date]';
        $errorTag = '[object Error]';
        $funcTag = '[object Function]';
        $genTag = '[object GeneratorFunction]';
        $numberTag = '[object Number]';
        $objectTag = '[object Object]';
        $proxyTag = '[object Proxy]';
        $regexpTag = '[object RegExp]';
        $stringTag = '[object String]';
        $reUnescapedHtml = '/[&<>"\']/g';
        $reHasUnescapedHtml = '/' . $reUnescapedHtml['source'] . '/';
        $reIsUint = '/^(?:0|[1-9]\\d*)$/';
        $htmlEscapes = [
            '&' => '&amp;',
            '<' => '&lt;',
            '>' => '&gt;',
            '"' => '&quot;',
            '\'' => '&#39;'
        ];
        $freeGlobal = (is_object($global) || is_array($global)) && $global && $global['Object'] === Object && $global;
        $freeSelf = (is_object($self) || is_array($self)) && $self && $self['Object'] === Object && $self;
        $root = $freeGlobal || $freeSelf || (static function() { return null; })();
        $freeExports = (is_object(exports) || is_array(exports)) && exports && !exports['nodeType'] && exports;
        $freeModule = $freeExports && (is_object(module) || is_array(module)) && module && !module['nodeType'] && module;
        function arrayPush($array, $values) {
            $array['push']['apply']($array, $values);
            return $array;
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
        function baseValues($object, $props) {
            return $baseMap($props, function($key) {
        return $object[$key];
});
        }
        $escapeHtmlChar = $basePropertyOf($htmlEscapes);
        function overArg($func, $transform) {
            return function($arg) {
        return $func($transform($arg));
};
        }
        $arrayProto = 'Array'['prototype'];
        $objectProto = Object['prototype'];
        $hasOwnProperty = $objectProto['hasOwnProperty'];
        $idCounter = 0;
        $nativeObjectToString = $objectProto['toString'];
        $oldDash = $root['_'];
        $objectCreate = Object['create'];
        $propertyIsEnumerable = $objectProto['propertyIsEnumerable'];
        $nativeIsFinite = $root['isFinite'];
        $nativeKeys = $overArg(keys, Object);
        $nativeMax = max;
        function lodash($value) {
            return ($value instanceof $LodashWrapper ? $value : new $LodashWrapper($value));
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
        function LodashWrapper($value, $chainAll) {
            $this->__wrapped__ = $value;
            $this->__actions__ = [];
            $this->__chain__ = !!$chainAll;
        }
        $LodashWrapper['prototype'] = $baseCreate($lodash['prototype']);
        $LodashWrapper['prototype']['constructor'] = $LodashWrapper;
        function assignValue($object, $key, $value) {
            $objValue = $object[$key];
            if (!call_user_func($hasOwnProperty, $object, $key) && $eq($objValue, $value) || $value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
                $baseAssignValue($object, $key, $value);
            }
        }
        function baseAssignValue($object, $key, $value) {
            $object[$key] = $value;
        }
        function baseDelay($func, $wait, $args) {
            if (!is_callable($func)) {
                throw new TypeError($FUNC_ERROR_TEXT);
            }
            return setTimeout(function() {
        $func['apply'](null, $args);
}, $wait);
        }
        $baseEach = $createBaseEach($baseForOwn);
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
                if ($current != null && ($computed === null ? $current === $current && !false : $comparator($current, $computed))) {
                    $computed = $current;
                    $result = $value;
                }
            }
            return $result;
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
        function baseForOwn($object, $iteratee) {
            return $object && $baseFor($object, $iteratee, $keys);
        }
        function baseFunctions($object, $props) {
            return $baseFilter($props, function($key) {
        return $isFunction($object[$key]);
});
        }
        function baseGetTag($value) {
            return $objectToString($value);
        }
        function baseGt($value, $other) {
            return $value > $other;
        }
        $baseIsArguments = $noop;
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
            $objTag = ($objIsArr ? $arrayTag : $baseGetTag($object));
            $othTag = ($othIsArr ? $arrayTag : $baseGetTag($other));
            $objTag = ($objTag == $argsTag ? $objectTag : $objTag);
            $othTag = ($othTag == $argsTag ? $objectTag : $othTag);
            $objIsObj = $objTag == $objectTag;
            $othIsObj = $othTag == $objectTag;
            $isSameTag = $objTag == $othTag;
            $stack || $stack = [];
            $objStack = $find($stack, function($entry) {
        return $entry[0] == $object;
});
            $othStack = $find($stack, function($entry) {
        return $entry[0] == $other;
});
            if ($objStack && $othStack) {
                return $objStack[1] == $other;
            }
            $stack[] = [$object, $other];
            $stack[] = [$other, $object];
            if ($isSameTag && !$objIsObj) {
                $result = ($objIsArr ? $equalArrays($object, $other, $bitmask, $customizer, $equalFunc, $stack) : $equalByTag($object, $other, $objTag, $bitmask, $customizer, $equalFunc, $stack));
                array_pop($stack);
                return $result;
            }
            if (!$bitmask & $COMPARE_PARTIAL_FLAG) {
                $objIsWrapped = $objIsObj && call_user_func($hasOwnProperty, $object, '__wrapped__');
                $othIsWrapped = $othIsObj && call_user_func($hasOwnProperty, $other, '__wrapped__');
                if ($objIsWrapped || $othIsWrapped) {
                    $objUnwrapped = ($objIsWrapped ? $object['value']() : $object);
                    $othUnwrapped = ($othIsWrapped ? $other['value']() : $other);
                    $result = $equalFunc($objUnwrapped, $othUnwrapped, $bitmask, $customizer, $stack);
                    array_pop($stack);
                    return $result;
                }
            }
            if (!$isSameTag) {
                return false;
            }
            $result = $equalObjects($object, $other, $bitmask, $customizer, $equalFunc, $stack);
            array_pop($stack);
            return $result;
        }
        function baseIsRegExp($value) {
            return $isObjectLike($value) && $baseGetTag($value) == $regexpTag;
        }
        function baseIteratee($func) {
            if (is_callable($func)) {
                return $func;
            }
            if ($func == null) {
                return $identity;
            }
            return ((is_object($func) || is_array($func)) ? $baseMatches : $baseProperty)($func);
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
            $props = $nativeKeys($source);
            return function($object) {
        $length = (is_array($props) ? count($props) : strlen($props));
        if ($object == null) {
            return !$length;
        }
        $object = Object($object);
        while ($length--) {
            $key = $props[$length];
            if (!(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false) && $baseIsEqual($source[$key], $object[$key], $COMPARE_PARTIAL_FLAG | $COMPARE_UNORDERED_FLAG)) {
                return false;
            }
        }
        return true;
};
        }
        function basePick($object, $props) {
            $object = Object($object);
            return $reduce($props, function($result, $key) {
        if ((is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
            $result[$key] = $object[$key];
        }
        return $result;
}, []);
        }
        function baseRest($func, $start) {
            return $setToString($overRest($func, $start, $identity), $func + '');
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
        function copyArray($source) {
            return $baseSlice($source, 0, (is_array($source) ? count($source) : strlen($source)));
        }
        function baseSome($collection, $predicate) {
            $result = null;
            $baseEach($collection, function($value, $index, $collection) {
        $result = $predicate($value, $index, $collection);
        return !$result;
});
            return !!$result;
        }
        function baseWrapperValue($value, $actions) {
            $result = $value;
            return $reduce($actions, function($result, $action) {
        return $action['func']['apply']($action['thisArg'], $arrayPush([$result], $action['args']));
}, $result);
        }
        function compareAscending($value, $other) {
            if ($value !== $other) {
                $valIsDefined = $value !== null;
                $valIsNull = $value === null;
                $valIsReflexive = $value === $value;
                $valIsSymbol = false;
                $othIsDefined = $other !== null;
                $othIsNull = $other === null;
                $othIsReflexive = $other === $other;
                $othIsSymbol = false;
                if (!$othIsNull && !$othIsSymbol && !$valIsSymbol && $value > $other || $valIsSymbol && $othIsDefined && $othIsReflexive && !$othIsNull && !$othIsSymbol || $valIsNull && $othIsDefined && $othIsReflexive || !$valIsDefined && $othIsReflexive || !$valIsReflexive) {
                    return 1;
                }
                if (!$valIsNull && !$valIsSymbol && !$othIsSymbol && $value < $other || $othIsSymbol && $valIsDefined && $valIsReflexive && !$valIsNull && !$valIsSymbol || $othIsNull && $valIsDefined && $valIsReflexive || !$othIsDefined && $valIsReflexive || !$othIsReflexive) {
                    return -1;
                }
            }
            return 0;
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
        function createAssigner($assigner) {
            return $baseRest(function($object, $sources) {
        $index = -1;
        $length = (is_array($sources) ? count($sources) : strlen($sources));
        $customizer = ($length > 1 ? $sources[$length - 1] : null);
        $customizer = ((is_array($assigner) ? count($assigner) : strlen($assigner)) > 3 && is_callable($customizer) ? (static function() { $length--; return $customizer; })() : null);
        $object = Object($object);
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
        $iterable = Object($collection);
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
        $iterable = Object($object);
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
        function createCtor($Ctor) {
            return function() {
        $args = $arguments;
        $thisBinding = $baseCreate($Ctor['prototype']);
        $result = $Ctor['apply']($thisBinding, $args);
        return ($isObject($result) ? $result : $thisBinding);
};
        }
        function createFind($findIndexFunc) {
            return function($collection, $predicate, $fromIndex) {
        $iterable = Object($collection);
        if (!$isArrayLike($collection)) {
            $iteratee = $baseIteratee($predicate, 3);
            $collection = $keys($collection);
            $predicate = function($key) {
        return $iteratee($iterable[$key], $key, $iterable);
};
        }
        $index = $findIndexFunc($collection, $predicate, $fromIndex);
        return ($index > -1 ? $iterable[($iteratee ? $collection[$index] : $index)] : null);
};
        }
        function createPartial($func, $bitmask, $thisArg, $partials) {
            if (!is_callable($func)) {
                throw new TypeError($FUNC_ERROR_TEXT);
            }
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
                return $fn['apply'](($isBind ? $thisArg : $this), $args);
            }
            return $wrapper;
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
            $seen = ($bitmask & $COMPARE_UNORDERED_FLAG ? [] : null);
            while (++$index < $arrLength) {
                $arrValue = $array[$index];
                $othValue = $other[$index];
                $compared = null;
                if ($compared !== null) {
                    if ($compared) {
                        continue;
                    }
                    $result = false;
                    break;
                }
                if ($seen) {
                    if (!$baseSome($other, function($othValue, $othIndex) {
        if (!$indexOf($seen, $othIndex) && $arrValue === $othValue || $equalFunc($arrValue, $othValue, $bitmask, $customizer, $stack)) {
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
            return $result;
        }
        function equalByTag($object, $other, $tag, $bitmask, $customizer, $equalFunc, $stack) {
            switch ($tag) {
                case $boolTag:
                case $dateTag:
                case $numberTag:
                    return $eq(+$object, +$other);
                case $errorTag:
                    return $object['name'] == $other['name'] && $object['message'] == $other['message'];
                case $regexpTag:
                case $stringTag:
                    return $object == $other + '';
            }
            return false;
        }
        function equalObjects($object, $other, $bitmask, $customizer, $equalFunc, $stack) {
            $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
            $objProps = $keys($object);
            $objLength = (is_array($objProps) ? count($objProps) : strlen($objProps));
            $othProps = $keys($other);
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
            $skipCtor = $isPartial;
            while (++$index < $objLength) {
                $key = $objProps[$index];
                $objValue = $object[$key];
                $othValue = $other[$key];
                $compared = null;
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
            return $result;
        }
        function flatRest($func) {
            return $setToString($overRest($func, null, $flatten), $func + '');
        }
        function isFlattenable($value) {
            return $isArray($value) || $isArguments($value);
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
        function nativeKeysIn($object) {
            $result = [];
            if ($object != null) {
                foreach (Object($object) as $key => $__value__) {
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
        return $func['apply']($this, $otherArgs);
};
        }
        $setToString = $identity;
        function _compact($array) {
            return $baseFilter($array, Boolean);
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
        function findIndex($array, $predicate, $fromIndex) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (!$length) {
                return -1;
            }
            $index = ($fromIndex == null ? 0 : $toInteger($fromIndex));
            if ($index < 0) {
                $index = $nativeMax($length + $index, 0);
            }
            return $baseFindIndex($array, $baseIteratee($predicate, 3), $index);
        }
        function flatten($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseFlatten($array, 1) : []);
        }
        function flattenDeep($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $baseFlatten($array, $INFINITY) : []);
        }
        function head($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $array[0] : null);
        }
        function indexOf($array, $value, $fromIndex) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            if (is_numeric($fromIndex)) {
                $fromIndex = ($fromIndex < 0 ? $nativeMax($length + $fromIndex, 0) : $fromIndex);
            } else {
                $fromIndex = 0;
            }
            $index = $fromIndex || 0 - 1;
            $isReflexive = $value === $value;
            while (++$index < $length) {
                $other = $array[$index];
                if (($isReflexive ? $other === $value : $other !== $other)) {
                    return $index;
                }
            }
            return -1;
        }
        function last($array) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            return ($length ? $array[$length - 1] : null);
        }
        function slice($array, $start, $end) {
            $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
            $start = ($start == null ? 0 : +$start);
            $end = ($end === null ? $length : +$end);
            return ($length ? $baseSlice($array, $start, $end) : []);
        }
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
        function wrapperChain() {
            return $chain($this);
        }
        function wrapperValue() {
            return $baseWrapperValue($this->__wrapped__, $this->__actions__);
        }
        function every($collection, $predicate, $guard) {
            $predicate = ($guard ? null : $predicate);
            return $baseEvery($collection, $baseIteratee($predicate));
        }
        function filter($collection, $predicate) {
            return $baseFilter($collection, $baseIteratee($predicate));
        }
        $find = $createFind($findIndex);
        function _forEach($collection, $iteratee) {
            return $baseEach($collection, $baseIteratee($iteratee));
        }
        function map($collection, $iteratee) {
            return $baseMap($collection, $baseIteratee($iteratee));
        }
        function reduce($collection, $iteratee, $accumulator) {
            return $baseReduce($collection, $baseIteratee($iteratee), $accumulator, (is_array($arguments) ? count($arguments) : strlen($arguments)) < 3, $baseEach);
        }
        function size($collection) {
            if ($collection == null) {
                return 0;
            }
            $collection = ($isArrayLike($collection) ? $collection : $nativeKeys($collection));
            return (is_array($collection) ? count($collection) : strlen($collection));
        }
        function some($collection, $predicate, $guard) {
            $predicate = ($guard ? null : $predicate);
            return $baseSome($collection, $baseIteratee($predicate));
        }
        function sortBy($collection, $iteratee) {
            $index = 0;
            $iteratee = $baseIteratee($iteratee);
            return $baseMap(sort(function($object, $other) {
        return $compareAscending($object['criteria'], $other['criteria']) || $object['index'] - $other['index'];
}, $baseMap($collection, function($value, $key, $collection) {
        return [
            'value' => $value,
            'index' => $index++,
            'criteria' => $iteratee($value, $key, $collection)
        ];
})), $baseProperty('value'));
        }
        function before($n, $func) {
            $result = null;
            if (!is_callable($func)) {
                throw new TypeError($FUNC_ERROR_TEXT);
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
        return $createPartial($func, $WRAP_BIND_FLAG | $WRAP_PARTIAL_FLAG, $thisArg, $partials);
});
        $defer = $baseRest(function($func, $args) {
        return $baseDelay($func, 1, $args);
});
        $delay = $baseRest(function($func, $wait, $args) {
        return $baseDelay($func, $toNumber($wait) || 0, $args);
});
        function negate($predicate) {
            if (!is_callable($predicate)) {
                throw new TypeError($FUNC_ERROR_TEXT);
            }
            return function() {
        $args = $arguments;
        return !$predicate['apply']($this, $args);
};
        }
        function once($func) {
            return $before(2, $func);
        }
        function _clone($value) {
            if (!$isObject($value)) {
                return $value;
            }
            return ($isArray($value) ? $copyArray($value) : $copyObject($value, $nativeKeys($value)));
        }
        function eq($value, $other) {
            return $value === $other || $value !== $value && $other !== $other;
        }
        $isArguments = ($baseIsArguments((function() {
        return $arguments;
})()) ? $baseIsArguments : function($value) {
        return $isObjectLike($value) && call_user_func($hasOwnProperty, $value, 'callee') && !call_user_func($propertyIsEnumerable, $value, 'callee');
});
        $isArray = 'Array'['isArray'];
        function isArrayLike($value) {
            return $value != null && $isLength((is_array($value) ? count($value) : strlen($value))) && !$isFunction($value);
        }
        function isBoolean($value) {
            return $value === true || $value === false || $isObjectLike($value) && $baseGetTag($value) == $boolTag;
        }
        $isDate = $baseIsDate;
        function isEmpty($value) {
            if ($isArrayLike($value) && $isArray($value) || $isString($value) || $isFunction($value['splice']) || $isArguments($value)) {
                return !(is_array($value) ? count($value) : strlen($value));
            }
            return !(is_array($nativeKeys($value)) ? count($nativeKeys($value)) : strlen($nativeKeys($value)));
        }
        function isEqual($value, $other) {
            return $baseIsEqual($value, $other);
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
        function isNaN($value) {
            return $isNumber($value) && $value != +$value;
        }
        function isNull($value) {
            return $value === null;
        }
        function isNumber($value) {
            return is_numeric($value) || $isObjectLike($value) && $baseGetTag($value) == $numberTag;
        }
        $isRegExp = $baseIsRegExp;
        function isString($value) {
            return is_string($value) || !$isArray($value) && $isObjectLike($value) && $baseGetTag($value) == $stringTag;
        }
        function isUndefined($value) {
            return $value === null;
        }
        function toArray($value) {
            if (!$isArrayLike($value)) {
                return $values($value);
            }
            return ((is_array($value) ? count($value) : strlen($value)) ? $copyArray($value) : []);
        }
        $toInteger = Number;
        $toNumber = Number;
        function toString($value) {
            if (is_string($value)) {
                return $value;
            }
            return ($value == null ? '' : $value + '');
        }
        $assign = $createAssigner(function($object, $source) {
        $copyObject($source, $nativeKeys($source), $object);
});
        $assignIn = $createAssigner(function($object, $source) {
        $copyObject($source, $nativeKeysIn($source), $object);
});
        function create($prototype, $properties) {
            $result = $baseCreate($prototype);
            return ($properties == null ? $result : $assign($result, $properties));
        }
        $defaults = $baseRest(function($object, $sources) {
        $object = Object($object);
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
        function has($object, $path) {
            return $object != null && call_user_func($hasOwnProperty, $object, $path);
        }
        $keys = $nativeKeys;
        $keysIn = $nativeKeysIn;
        $pick = $flatRest(function($object, $paths) {
        return ($object == null ? [] : $basePick($object, $paths));
});
        function result($object, $path, $defaultValue) {
            $value = ($object == null ? null : $object[$path]);
            if ($value === null) {
                $value = $defaultValue;
            }
            return ($isFunction($value) ? call_user_func($value, $object) : $value);
        }
        function values($object) {
            return ($object == null ? [] : $baseValues($object, $keys($object)));
        }
        function escape($string) {
            $string = $toString($string);
            return ($string && preg_match($string, $reHasUnescapedHtml) ? str_replace($reUnescapedHtml, $escapeHtmlChar, $string) : $string);
        }
        function identity($value) {
            return $value;
        }
        $iteratee = $baseIteratee;
        function matches($source) {
            return $baseMatches($assign([], $source));
        }
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
            $baseEach($methodNames, function($methodName) {
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
        function uniqueId($prefix) {
            $id = ++$idCounter;
            return $toString($prefix) + $id;
        }
        function _max($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $identity, $baseGt) : null);
        }
        function _min($array) {
            return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $identity, $baseLt) : null);
        }
        $lodash['assignIn'] = $assignIn;
        $lodash['before'] = $before;
        $lodash['bind'] = $bind;
        $lodash['chain'] = $chain;
        $lodash['compact'] = $compact;
        $lodash['concat'] = $concat;
        $lodash['create'] = $create;
        $lodash['defaults'] = $defaults;
        $lodash['defer'] = $defer;
        $lodash['delay'] = $delay;
        $lodash['filter'] = $filter;
        $lodash['flatten'] = $flatten;
        $lodash['flattenDeep'] = $flattenDeep;
        $lodash['iteratee'] = $iteratee;
        $lodash['keys'] = $keys;
        $lodash['map'] = $map;
        $lodash['matches'] = $matches;
        $lodash['mixin'] = $mixin;
        $lodash['negate'] = $negate;
        $lodash['once'] = $once;
        $lodash['pick'] = $pick;
        $lodash['slice'] = $slice;
        $lodash['sortBy'] = $sortBy;
        $lodash['tap'] = $tap;
        $lodash['thru'] = $thru;
        $lodash['toArray'] = $toArray;
        $lodash['values'] = $values;
        $lodash['extend'] = $assignIn;
        $mixin($lodash, $lodash);
        $lodash['clone'] = $clone;
        $lodash['escape'] = $escape;
        $lodash['every'] = $every;
        $lodash['find'] = $find;
        $lodash['forEach'] = $forEach;
        $lodash['has'] = $has;
        $lodash['head'] = $head;
        $lodash['identity'] = $identity;
        $lodash['indexOf'] = $indexOf;
        $lodash['isArguments'] = $isArguments;
        $lodash['isArray'] = $isArray;
        $lodash['isBoolean'] = $isBoolean;
        $lodash['isDate'] = $isDate;
        $lodash['isEmpty'] = $isEmpty;
        $lodash['isEqual'] = $isEqual;
        $lodash['isFinite'] = $isFinite;
        $lodash['isFunction'] = $isFunction;
        $lodash['isNaN'] = $isNaN;
        $lodash['isNull'] = $isNull;
        $lodash['isNumber'] = $isNumber;
        $lodash['isObject'] = $isObject;
        $lodash['isRegExp'] = $isRegExp;
        $lodash['isString'] = $isString;
        $lodash['isUndefined'] = $isUndefined;
        $lodash['last'] = $last;
        $lodash['max'] = $max;
        $lodash['min'] = $min;
        $lodash['noConflict'] = $noConflict;
        $lodash['noop'] = $noop;
        $lodash['reduce'] = $reduce;
        $lodash['result'] = $result;
        $lodash['size'] = $size;
        $lodash['some'] = $some;
        $lodash['uniqueId'] = $uniqueId;
        $lodash['each'] = $forEach;
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
        $baseEach(['pop', 'join', 'replace', 'reverse', 'split', 'push', 'shift', 'sort', 'splice', 'unshift'], function($methodName) {
        $func = (preg_match($methodName, '/^(?:replace|split)$/') ? String['prototype'] : $arrayProto)[$methodName];
        $chainName = (preg_match($methodName, '/^(?:push|sort|unshift)$/') ? 'tap' : 'thru');
        $retUnwrapped = preg_match($methodName, '/^(?:pop|join|replace|shift)$/');
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
        $lodash['prototype']['toJSON'] = $lodash['prototype']['valueOf'] = $lodash['prototype']['value'] = $wrapperValue;
        if (is_callable($define) && (is_object($define['amd']) || is_array($define['amd'])) && $define['amd']) {
            $root['_'] = $lodash;
            $define(function() {
        return $lodash;
});
        } else if ($freeModule) {
            $freeModule['exports'] = $lodash['_'] = $lodash;
            $freeExports['_'] = $lodash;
        } else {
            $root['_'] = $lodash;
        }
}, $this);

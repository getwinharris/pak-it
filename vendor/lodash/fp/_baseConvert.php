<?php
$mapping = require __DIR__ . '/_mapping.php';
$fallbackHolder = require __DIR__ . '/placeholder.php';
$push = 'Array'['prototype']['push'];
function baseArity($func, $n) {
    return ($n == 2 ? function($a, $b) {
        return $func['apply'](null, $arguments);
} : function($a) {
        return $func['apply'](null, $arguments);
});
}
function baseAry($func, $n) {
    return ($n == 2 ? function($a, $b) {
        return $func($a, $b);
} : function($a) {
        return $func($a);
});
}
function cloneArray($array) {
    $length = ($array ? (is_array($array) ? count($array) : strlen($array)) : 0);
    $result = array_fill(0, $length, null);
    while ($length--) {
        $result[$length] = $array[$length];
    }
    return $result;
}
function createCloner($func) {
    return function($object) {
        return $func([], $object);
};
}
function flatSpread($func, $start) {
    return function() {
        $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
        $lastIndex = $length - 1;
        $args = array_fill(0, $length, null);
        while ($length--) {
            $args[$length] = $arguments[$length];
        }
        $array = $args[$start];
        $otherArgs = array_slice(0, $start, $args);
        if ($array) {
            $push['apply']($otherArgs, $array);
        }
        if ($start != $lastIndex) {
            $push['apply']($otherArgs, array_slice($start + 1, $args));
        }
        return $func['apply']($this, $otherArgs);
};
}
function wrapImmutable($func, $cloner) {
    return function() {
        $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
        if (!$length) {
            return;
        }
        $args = array_fill(0, $length, null);
        while ($length--) {
            $args[$length] = $arguments[$length];
        }
        $result = $args[0] = $cloner['apply'](null, $args);
        $func['apply'](null, $args);
        return $result;
};
}
function baseConvert($util, $name, $func, $options) {
    $isLib = is_callable($name);
    $isObj = $name === Object($name);
    if ($isObj) {
        $options = $func;
        $func = $name;
        $name = null;
    }
    if ($func == null) {
        throw new TypeError();
    }
    $options || $options = [];
    $config = [
        'cap' => ((is_array($options) ? (array_key_exists('cap', $options) || in_array('cap', $options)) : false) ? $options['cap'] : true),
        'curry' => ((is_array($options) ? (array_key_exists('curry', $options) || in_array('curry', $options)) : false) ? $options['curry'] : true),
        'fixed' => ((is_array($options) ? (array_key_exists('fixed', $options) || in_array('fixed', $options)) : false) ? $options['fixed'] : true),
        'immutable' => ((is_array($options) ? (array_key_exists('immutable', $options) || in_array('immutable', $options)) : false) ? $options['immutable'] : true),
        'rearg' => ((is_array($options) ? (array_key_exists('rearg', $options) || in_array('rearg', $options)) : false) ? $options['rearg'] : true)
    ];
    $defaultHolder = ($isLib ? $func : $fallbackHolder);
    $forceCurry = (is_array($options) ? (array_key_exists('curry', $options) || in_array('curry', $options)) : false) && $options['curry'];
    $forceFixed = (is_array($options) ? (array_key_exists('fixed', $options) || in_array('fixed', $options)) : false) && $options['fixed'];
    $forceRearg = (is_array($options) ? (array_key_exists('rearg', $options) || in_array('rearg', $options)) : false) && $options['rearg'];
    $pristine = ($isLib ? $func['runInContext']() : null);
    $helpers = ($isLib ? $func : [
        'ary' => $util['ary'],
        'assign' => $util['assign'],
        'clone' => $util['clone'],
        'curry' => $util['curry'],
        'forEach' => $util['forEach'],
        'isArray' => $util['isArray'],
        'isError' => $util['isError'],
        'isFunction' => $util['isFunction'],
        'isWeakMap' => $util['isWeakMap'],
        'iteratee' => $util['iteratee'],
        'keys' => $util['keys'],
        'rearg' => $util['rearg'],
        'toInteger' => $util['toInteger'],
        'toPath' => $util['toPath']
    ]);
    $ary = $helpers['ary'];
    $assign = $helpers['assign'];
    $clone = $helpers['clone'];
    $curry = $helpers['curry'];
    $each = $helpers['forEach'];
    $isArray = $helpers['isArray'];
    $isError = $helpers['isError'];
    $isFunction = $helpers['isFunction'];
    $isWeakMap = $helpers['isWeakMap'];
    $keys = $helpers['keys'];
    $rearg = $helpers['rearg'];
    $toInteger = $helpers['toInteger'];
    $toPath = $helpers['toPath'];
    $aryMethodKeys = $keys($mapping['aryMethod']);
    $wrappers = [
        'castArray' => function($castArray) {
        return function() {
        $value = $arguments[0];
        return ($isArray($value) ? $castArray($cloneArray($value)) : $castArray['apply'](null, $arguments));
};
},
        'iteratee' => function($iteratee) {
        return function() {
        $func = $arguments[0];
        $arity = $arguments[1];
        $result = $iteratee($func, $arity);
        $length = (is_array($result) ? count($result) : strlen($result));
        if ($config['cap'] && is_numeric($arity)) {
            $arity = ($arity > 2 ? $arity - 2 : 1);
            return ($length && $length <= $arity ? $result : $baseAry($result, $arity));
        }
        return $result;
};
},
        'mixin' => function($mixin) {
        return function($source) {
        $func = $this;
        if (!$isFunction($func)) {
            return $mixin($func, Object($source));
        }
        $pairs = [];
        $each($keys($source), function($key) {
        if ($isFunction($source[$key])) {
            $pairs[] = [$key, $func['prototype'][$key]];
        }
});
        $mixin($func, Object($source));
        $each($pairs, function($pair) {
        $value = $pair[1];
        if ($isFunction($value)) {
            $func['prototype'][$pair[0]] = $value;
        } else {
            (static function() { if (isset($func['prototype'][$pair[0]])) { unset($func['prototype'][$pair[0]]); return true; } return true; })();
        }
});
        return $func;
};
},
        'nthArg' => function($nthArg) {
        return function($n) {
        $arity = ($n < 0 ? 1 : $toInteger($n) + 1);
        return $curry($nthArg($n), $arity);
};
},
        'rearg' => function($rearg) {
        return function($func, $indexes) {
        $arity = ($indexes ? (is_array($indexes) ? count($indexes) : strlen($indexes)) : 0);
        return $curry($rearg($func, $indexes), $arity);
};
},
        'runInContext' => function($runInContext) {
        return function($context) {
        return $baseConvert($util, $runInContext($context), $options);
};
}
    ];
    function castCap($name, $func) {
        if ($config['cap']) {
            $indexes = $mapping['iterateeRearg'][$name];
            if ($indexes) {
                return $iterateeRearg($func, $indexes);
            }
            $n = !$isLib && $mapping['iterateeAry'][$name];
            if ($n) {
                return $iterateeAry($func, $n);
            }
        }
        return $func;
    }
    function castCurry($name, $func, $n) {
        return ($forceCurry || $config['curry'] && $n > 1 ? $curry($func, $n) : $func);
    }
    function castFixed($name, $func, $n) {
        if ($config['fixed'] && $forceFixed || !$mapping['skipFixed'][$name]) {
            $data = $mapping['methodSpread'][$name];
            $start = $data && $data['start'];
            return ($start === null ? $ary($func, $n) : $flatSpread($func, $start));
        }
        return $func;
    }
    function castRearg($name, $func, $n) {
        return ($config['rearg'] && $n > 1 && $forceRearg || !$mapping['skipRearg'][$name] ? $rearg($func, $mapping['methodRearg'][$name] || $mapping['aryRearg'][$n]) : $func);
    }
    function cloneByPath($object, $path) {
        $path = $toPath($path);
        $index = -1;
        $length = (is_array($path) ? count($path) : strlen($path));
        $lastIndex = $length - 1;
        $result = $clone(Object($object));
        $nested = $result;
        while ($nested != null && ++$index < $length) {
            $key = $path[$index];
            $value = $nested[$key];
            if ($value != null && !$isFunction($value) || $isError($value) || $isWeakMap($value)) {
                $nested[$key] = $clone(($index == $lastIndex ? $value : Object($value)));
            }
            $nested = $nested[$key];
        }
        return $result;
    }
    function convertLib($options) {
        return $_['runInContext']['convert']($options)(null);
    }
    function createConverter($name, $func) {
        $realName = $mapping['aliasToReal'][$name] || $name;
        $methodName = $mapping['remap'][$realName] || $realName;
        $oldOptions = $options;
        return function($options) {
        $newUtil = ($isLib ? $pristine : $helpers);
        $newFunc = ($isLib ? $pristine[$methodName] : $func);
        $newOptions = $assign($assign([], $oldOptions), $options);
        return $baseConvert($newUtil, $realName, $newFunc, $newOptions);
};
    }
    function iterateeAry($func, $n) {
        return $overArg($func, function($func) {
        return (is_callable($func) ? $baseAry($func, $n) : $func);
});
    }
    function iterateeRearg($func, $indexes) {
        return $overArg($func, function($func) {
        $n = (is_array($indexes) ? count($indexes) : strlen($indexes));
        return $baseArity($rearg($baseAry($func, $n), $indexes), $n);
});
    }
    function overArg($func, $transform) {
        return function() {
        $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
        if (!$length) {
            return $func();
        }
        $args = array_fill(0, $length, null);
        while ($length--) {
            $args[$length] = $arguments[$length];
        }
        $index = ($config['rearg'] ? 0 : $length - 1);
        $args[$index] = $transform($args[$index]);
        return $func['apply'](null, $args);
};
    }
    function wrap($name, $func, $placeholder) {
        $result = null;
        $realName = $mapping['aliasToReal'][$name] || $name;
        $wrapped = $func;
        $wrapper = $wrappers[$realName];
        if ($wrapper) {
            $wrapped = $wrapper($func);
        } else if ($config['immutable']) {
            if ($mapping['mutate']['array'][$realName]) {
                $wrapped = $wrapImmutable($func, $cloneArray);
            } else if ($mapping['mutate']['object'][$realName]) {
                $wrapped = $wrapImmutable($func, $createCloner($func));
            } else if ($mapping['mutate']['set'][$realName]) {
                $wrapped = $wrapImmutable($func, $cloneByPath);
            }
        }
        $each($aryMethodKeys, function($aryKey) {
        $each($mapping['aryMethod'][$aryKey], function($otherName) {
        if ($realName == $otherName) {
            $data = $mapping['methodSpread'][$realName];
            $afterRearg = $data && $data['afterRearg'];
            $result = ($afterRearg ? $castFixed($realName, $castRearg($realName, $wrapped, $aryKey), $aryKey) : $castRearg($realName, $castFixed($realName, $wrapped, $aryKey), $aryKey));
            $result = $castCap($realName, $result);
            $result = $castCurry($realName, $result, $aryKey);
            return false;
        }
});
        return !$result;
});
        $result || $result = $wrapped;
        if ($result == $func) {
            $result = ($forceCurry ? $curry($result, 1) : function() {
        return $func['apply']($this, $arguments);
});
        }
        $result['convert'] = $createConverter($realName, $func);
        $result['placeholder'] = $func['placeholder'] = $placeholder;
        return $result;
    }
    if (!$isObj) {
        return $wrap($name, $func, $defaultHolder);
    }
    $_ = $func;
    $pairs = [];
    $each($aryMethodKeys, function($aryKey) {
        $each($mapping['aryMethod'][$aryKey], function($key) {
        $func = $_[$mapping['remap'][$key] || $key];
        if ($func) {
            $pairs[] = [$key, $wrap($key, $func, $_)];
        }
});
});
    $each($keys($_), function($key) {
        $func = $_[$key];
        if (is_callable($func)) {
            $length = (is_array($pairs) ? count($pairs) : strlen($pairs));
            while ($length--) {
                if ($pairs[$length][0] == $key) {
                    return;
                }
            }
            $func['convert'] = $createConverter($key, $func);
            $pairs[] = [$key, $func];
        }
});
    $each($pairs, function($pair) {
        $_[$pair[0]] = $pair[1];
});
    $_['convert'] = $convertLib;
    $_['placeholder'] = $_;
    $each($keys($_), function($key) {
        $each($mapping['realToAlias'][$key] || [], function($alias) {
        $_[$alias] = $_[$key];
});
});
    return $_;
}
return 'baseConvert';

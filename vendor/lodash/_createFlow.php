<?php
$LodashWrapper = require __DIR__ . '/_LodashWrapper.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$getData = require __DIR__ . '/_getData.php';
$getFuncName = require __DIR__ . '/_getFuncName.php';
$isArray = require __DIR__ . '/isArray.php';
$isLaziable = require __DIR__ . '/_isLaziable.php';
$FUNC_ERROR_TEXT = 'Expected a function';
$WRAP_CURRY_FLAG = 8;
$WRAP_PARTIAL_FLAG = 32;
$WRAP_ARY_FLAG = 128;
$WRAP_REARG_FLAG = 256;
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
                throw new TypeError($FUNC_ERROR_TEXT);
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
return 'createFlow';

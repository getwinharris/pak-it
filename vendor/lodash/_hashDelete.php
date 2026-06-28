<?php
function hashDelete($key) {
    $result = $this->has($key) && (static function() { if (isset($this->__data__[$key])) { unset($this->__data__[$key]); return true; } return true; })();
    $this->size -= ($result ? 1 : 0);
    return $result;
}
return 'hashDelete';

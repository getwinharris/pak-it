<?php
$baseConvert = require __DIR__ . '/_baseConvert.php';
function browserConvert($lodash, $options) {
    return $baseConvert($lodash, $lodash, $options);
}
if (is_callable($_) && is_callable($_['runInContext'])) {
    $_ = $browserConvert($_['runInContext']());
}
return 'browserConvert';

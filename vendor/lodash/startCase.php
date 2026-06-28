<?php
$createCompounder = require __DIR__ . '/_createCompounder.php';
$upperFirst = require __DIR__ . '/upperFirst.php';
$startCase = $createCompounder(function($result, $word, $index) {
        return $result + ($index ? ' ' : '') + $upperFirst($word);
});
return 'startCase';

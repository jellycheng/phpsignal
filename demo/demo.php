<?php
/**
 * Created by PhpStorm.
 * User: jelly
 * Date: 2019-09-11
 * Time: 01:25
 */

require_once __DIR__ . '/common.php';

function loop()
{
    return \CjsSignal\Loop::getInstance();
}

$abc = loop();

$abc();

echo 'finish' . PHP_EOL;

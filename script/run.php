<?php

require '../vendor/autoload.php';
require 'scriptMethods.php';

$x = include '../vendor/moneyphp/money/resources/currency.php';

foreach ($x as $val) {
    $c = getClass($val['currency'], $val['alphabeticCode'], $val['numericCode']);
    $ret = $c->generate();
    $ret = preg_replace('/^/','<?php'.PHP_EOL.PHP_EOL.'declare(strict_types = 1);'.PHP_EOL.PHP_EOL,$ret);
    $ret = preg_replace('#[^t]Currency {#','Currency;', $ret);
    $ret = preg_replace('#tCurrency {#','Currency'.PHP_EOL.'{', $ret);
    $ret = preg_replace('/}$/','', $ret);
    $ret = preg_replace('/\n    /', PHP_EOL, $ret);
    $ret = preg_replace('#ity\) {#','ity)'.PHP_EOL.'    {', $ret);
    $path = getPath($val['currency']);
    if (!file_exists($path)) {
        file_put_contents($path, $ret);
    }

}
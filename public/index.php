<?php

include '../src/autoload.php';

use App\Calculator\Calculator;

$calc = new Calculator();
$calc->add(1)->add(2)->add(3);

response_json(['data' => $calc->result()], 200, ['x-test' => 'abcd']);



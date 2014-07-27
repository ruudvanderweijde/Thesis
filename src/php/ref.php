<?php

$a = "a";

function ref(&$b) {
    $b = array();
}

var_dump($a);
ref($a);
var_dump($a);

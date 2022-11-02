<?php

function count_digits($number){
    if($number > 0){
        return strlen($number);
    }else {
        return "Error";
    }
}

$digits = count_digits(103);
echo $digits;
echo PHP_EOL;
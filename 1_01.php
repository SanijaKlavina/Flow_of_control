<?php
$firstNumber = readline("Input the 1st number: ");
$secondNumber = readline("Input the 2nd number: ");
$thirdNumber = readline("Input the 3rd number: ");

if($firstNumber > $secondNumber && $firstNumber > $thirdNumber){
    echo $firstNumber;
}
if($secondNumber > $firstNumber && $secondNumber > $thirdNumber){
    echo $secondNumber;
}
if($thirdNumber > $firstNumber && $thirdNumber > $secondNumber){
    echo $thirdNumber;
}


echo PHP_EOL;

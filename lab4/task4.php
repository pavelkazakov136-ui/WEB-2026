<?php

function sumDigitsOfNumberThree(int $num): int {
    return (int)($num / 100) + (int)(($num % 100) / 10) + $num % 10;
}
if (isset($_POST['num1']) && $_POST['num1'] != '' && isset($_POST['num2']) && $_POST['num2'] != '' ) {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $conclusion = false;
    if ($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    } 
    if ($num1 >= 100000 && $num2 <=999999) {
        for ($i = $num1; $i <= $num2; $i++) {
            $FirstThree = $i % 1000;
            $SecondThree = (int)($i / 1000);
            if (sumDigitsOfNumberThree($FirstThree) == sumDigitsOfNumberThree($SecondThree)) {
                $conclusion = true;
                echo $i . ' ';
            }
        }
        if ($conclusion == false){
            echo 'в диапозоне от ' . $num1 . ' до ' . $num2 . ' нет счастливых билетов';
        }
    }
    else 
        echo 'out of range';
}
else
    echo 'no data';
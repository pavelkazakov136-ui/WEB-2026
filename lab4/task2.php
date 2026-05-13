<?php

function digitToWord(string $digit): string
{
    return match($digit) {
        '0' => 'Ноль',
        '1' => 'Один',
        '2' => 'Два',
        '3' => 'Три',
        '4' => 'Четыре',
        '5' => 'Пять',
        '6' => 'Шесть',
        '7' => 'Семь',
        '8' => 'Восемь',
        '9' => 'Девять',
        default => 'ERROR INPUT',
    };
}
if (isset($_POST['digit']) && $_POST['digit'] != '') {
    $digit = $_POST['digit'];
    if ($digit >= '0' && $digit <= '9') {
        echo digitToWord($digit);
    }
    else {
        echo 'ERROR INPUT';
    }
}
else {
    echo 'no data';
}
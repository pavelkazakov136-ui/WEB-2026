<?php

function isLeapYear(int $year): bool {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}
if (isset($_POST['year']) && $_POST['year'] != '') {
    $year = (int)$_POST['year'];
    if ($year < 30000) {
        if (isLeapYear($year)) {
            echo 'YES';
        }
        else {
            echo 'NO';
        }
    }
    else {
        echo 'overflow';
    }
}
else {
    echo 'no data';
}

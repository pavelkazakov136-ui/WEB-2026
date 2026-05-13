<?php

function factorial(int $num) {
    if ($num != 0) {
        return $num = $num * factorial($num - 1);
    }
    else {
        return 1;
    }
}

if (isset($_POST['num']) && $_POST['num'] != '') {
    $num = $_POST['num'];
    echo factorial($num);
}
else {
    echo 'no data';
}
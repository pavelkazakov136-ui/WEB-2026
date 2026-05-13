<?php

function isInt(string $str): bool {
    if ($str >= '00000000' && $str <= '99999999'){
        return true;
    }
    else {
        return false;
    }
}

function isRightDate(string $str): bool {
    if (!isset($str[10]) && $str[2] == '.' && $str[5] == '.' && isInt($str[0].$str[1].$str[3].$str[4].$str[6].$str[7].$str[8].$str[9])) {
        return true;
    }
    else {
        return false;
    }
}

function isLeapYear(int $year): bool
{
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

function writeZodiak(array $arr) {
    switch ($arr) {
    case ($arr['month'] == '03' && $arr['day'] >= '21' && $arr['day'] <= '31') || ($arr['month'] == '04' && $arr['day'] >= '01' && $arr['day'] <= '20'):
        echo 'овен';
        break;
    case ($arr['month'] == '04' && $arr['day'] >= '21' && $arr['day'] <= '30') || ($arr['month'] == '05' && $arr['day'] >= '01' && $arr['day'] <= '20'):
        echo 'телец';
        break;
    case ($arr['month'] == '05' && $arr['day'] >= '21' && $arr['day'] <= '31') || ($arr['month'] == '06' && $arr['day'] >= '01' && $arr['day'] <= '21'):
        echo 'близнецы';
        break;
    case ($arr['month'] == '06' && $arr['day'] >= '22' && $arr['day'] <= '30') || ($arr['month'] == '07' && $arr['day'] >= '01' && $arr['day'] <= '22'):
        echo 'рак';
        break;
    case ($arr['month'] == '07' && $arr['day'] >= '23' && $arr['day'] <= '31') || ($arr['month'] == '08' && $arr['day'] >= '01' && $arr['day'] <= '23'):
        echo 'лев';
        break;
    case ($arr['month'] == '08' && $arr['day'] >= '24' && $arr['day'] <= '31') || ($arr['month'] == '09' && $arr['day'] >= '01' && $arr['day'] <= '23'):
        echo 'дева';
        break;
    case ($arr['month'] == '09' && $arr['day'] >= '24' && $arr['day'] <= '30') || ($arr['month'] == '10' && $arr['day'] >= '01' && $arr['day'] <= '23'):
        echo 'весы';
        break;
    case ($arr['month'] == '10' && $arr['day'] >= '24' && $arr['day'] <= '31') || ($arr['month'] == '11' && $arr['day'] >= '01' && $arr['day'] <= '22'):
        echo 'скорпион';
        break;
    case ($arr['month'] == '11' && $arr['day'] >= '23' && $arr['day'] <= '30') || ($arr['month'] == '12' && $arr['day'] >= '01' && $arr['day'] <= '21'):
        echo 'стрелец';
        break;
    case ($arr['month'] == '12' && $arr['day'] >= '22' && $arr['day'] <= '31') || ($arr['month'] == '01' && $arr['day'] >= '01' && $arr['day'] <= '20'):
        echo 'козерог';
        break;
    case ($arr['month'] == '01' && $arr['day'] >= '21' && $arr['day'] <= '31') || ($arr['month'] == '02' && $arr['day'] >= '01' && $arr['day'] <= '19'):
        echo 'водолей';
        break;
    case ($arr['month'] == '02' && $arr['day'] >= '20' && ($arr['day'] <= '29' && isLeapYear((int)$arr['year'])) || ($arr['day'] <= '28' && !isLeapYear((int)$arr['year']))) || ($arr['month'] == '03' && $arr['day'] >= '01' && $arr['day'] <= '20'):
        echo 'рыбы';
        break;
    default:
        echo 'некорректная дата';
        break;
}
}

if (isset($_POST['date']) && $_POST['date'] != ''){
    $strDate = $_POST['date'];
    if (isRightDate($_POST['date'])){
        $ArrDate = [
            'day' => $strDate[0].$strDate[1],
            'month' => $strDate[3].$strDate[4],
            'year' => $strDate[6].$strDate[7].$strDate[8].$strDate[9]
        ];
        writeZodiak($ArrDate);               
    }
    else{
        echo 'error input';
    } 
}
else {
    echo 'no data';
}

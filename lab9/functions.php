<?php
date_default_timezone_set('Europe/Moscow');

const MIN = 60;
const HOUR = MIN * 60;
const DAY = HOUR * 24;
const MONTH = DAY * 31;
const YEAR = MONTH * 12;

function timeAgo(string $date): string
{
    $diff = time() - strtotime($date);
    if ($diff < 0){
       $diff = $diff * -1; 
    }
    if ($diff < MIN) {
        return $diff . ' секунд назад';
    }
    elseif ($diff < HOUR) {
        return floor($diff / MIN) . ' мин назад';
    }
    elseif ($diff < DAY) {
        return floor($diff / HOUR) . ' час назад';
    }
    elseif ($diff < MONTH) {
        return floor($diff / DAY) . ' дн назад';
    }
    elseif ($diff < YEAR) {
        return floor($diff / MONTH) . ' мес назад';
    }
    return floor($diff / YEAR) . ' лет назад';
}
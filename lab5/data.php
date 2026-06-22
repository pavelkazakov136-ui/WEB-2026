<?php
include 'functions.php';
$posts = [
    [
        'id' => 1,
        'author' => 'Ваня Денисов',
        'avatar' => 'settings/img/Avatar_Ivan_Denisov.jpg',
        'img' => 'settings/img/post1.jpg',
        'likes' => 203,
        'text' => 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»',
        'time' => timeAgo('2026-05-23 12:00:00'),
        'count' => '1/3',
        'canEdit' => true,
    ],
    [
        'id' => 2,
        'author' => 'Лиза Демидова',
        'avatar' => 'settings/img/Avatar_Liza_Demidova.jpg',
        'img' => 'settings/img/post2.jpg',
        'likes' => 534,
        'text' => '',
        'time' => timeAgo('2026-05-22 12:00:00'),
        'count' => '',
        'canEdit' => false,
    ],
];
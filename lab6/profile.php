<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="settings/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="page page--profile">
    <nav class="nav">
        <a href="home.php" class="nav__item">
            <img src="settings/svg/Home24.svg" alt="home">
        </a>
        <a href="profile.php" class="nav__item">
            <img src="settings/svg/profile.svg" alt="profile">
        </a>
        <a href="" class="nav__item">
            <img src="settings/svg/add-post.svg" alt="add post">
        </a>
    </nav>

    <div class="profile">
        <img src="settings/img/Avatar_Ivan_Denisov.jpg" alt="ava" class="profile__avatar">
        <span class="profile__name">Ваня Денисов</span>
        <span class="profile__bio">
            Привет! Я системный аналитик в ACME :) Тут моя жизнь только для самых классных!
        </span>
        <div class="profile__count">
            <img src="settings/svg/CountPost.svg" alt="picture" class="profile__count-icon">
            <span class="profile__count-text">43 поста</span>
        </div>
        <div class="profile__grid">
            <img src="settings/img/post1.jpg" alt="first-photo" class="profile__picture">
            <img src="settings/img/IMG_5223_1.png" alt="second-photo" class="profile__picture">
            <img src="settings/img/IMG_3497.png" alt="third-photo" class="profile__picture">
            <img src="settings/img/IMG_6728_1.png" alt="four-photo" class="profile__picture">
            <img src="settings/img/IMG_4190.png" alt="five-photo" class="profile__picture">
            <img src="settings/img/IMG_2947.png" alt="six-photo" class="profile__picture">
        </div>
    </div>
</body>
</html>

<?php 
include 'db.php'; 
$connection = connectDatabase(); 
$posts = getAllPosts($connection);
$currentUserId = 1;
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="settings/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="page page--home">
    <nav class="nav">
        <a href="home.php" class="nav__item">
            <img src="settings/svg/Home.svg" alt="home">
        </a>
        <a href="profile.php" class="nav__item">
            <img src="settings/svg/profile.svg" alt="profile">
        </a>
        <a href="" class="nav__item">
            <img src="settings/svg/add-post.svg" alt="add post">
        </a>
    </nav>
    <main class="feed">
        <header class="feed__title"></header>
        <div class="feed__list">
            <?php 
            foreach ($posts as $post) {
                include 'post_preview.php';
            }
            ?>

        </div>
    </main>
    <div class="modal" data-modal style="display: none;">
        <div class="modal__overlay" data-modal-overlay></div>
        <div class="modal__content">
            <button class="modal__close" data-modal-close>✖</button>
            <img class="modal__image" data-modal-image src="" alt="">
            <div class="modal__counter" data-modal-counter></div>
            <button class="modal__prev" data-modal-prev>
                <img src="settings/svg/Slider-Button.svg" alt="prev">
            </button>
            <button class="modal__next" data-modal-next>
                <img src="settings/svg/Slider-Button.svg" alt="next">
            </button>
        </div>
    </div>
    <script src="modal.js"></script>
    <script src="slider.js"></script>
</body>
</html>

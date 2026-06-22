<?php
$postId = $_GET['id'] ?? null;
$isFullPost = true;
include 'data.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пост №<?= $postId ?></title>
    <link rel="stylesheet" href="settings/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="page page--home">
    <nav class="nav">
        <a href="home" class="nav__item">
            <img src="settings/svg/Home.svg" alt="home">
        </a>
        <a href="profile" class="nav__item">
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
                if ($post['id'] == $postId) {
                    include 'post_preview.php';
                }
            }
            ?>
        </div>
    </main>
</body>
</html>
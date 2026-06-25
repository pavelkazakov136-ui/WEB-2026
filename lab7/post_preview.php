<?php
    include_once 'functions.php';
    $images = getPostImages($connection, $post['id']);
?>
<div class="post">
    <div class="post__author">
        <img src="<?= $post['avatar'] ?>" alt="avatar" class="post__avatar">
        <h1 class="post__name"><?= $post['author'] ?></h1>
        <?php if ($post['user_id'] == $currentUserId): ?>
            <img src="settings/svg/pen.svg" alt="pen" class="post__pen">
        <?php endif; ?>
    </div>
    <div class="post__picture-link">
        <a href="post?id=<?= $post['id'] ?>">
            <img src="<?= $images[0]['image'] ?>" alt="picture" class="post__picture">
            <?php if (count($images) > 1): ?>
                <div class="post__count">1/<?= count($images) ?></div>
                <button class="post__slider-btn">
                <img src="settings/svg/Slider-Button.svg" alt="slide">
            </button>
            <?php endif; ?>
        </a>
    </div>
    <div class="post__likes">
        <img src="settings/img/like.png" alt="like" class="post__like">
        <?= $post['likes'] ?>
    </div>
    <div class="post__content">
        <p class="<?= isset($isFullPost) ? 'post__text-full' : 'post__text' ?>"><?= $post['text'] ?></p>
        <?php if (!isset($isFullPost) && isset($post['text']) && strlen($post['text']) > 86): ?>
            <button class="post__more-btn">ещё</button>
        <?php endif; ?>
        <div class="post__after"><?= timeAgo($post['posted_at']) ?></div>
    </div>
</div>
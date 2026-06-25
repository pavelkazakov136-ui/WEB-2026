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
    <div class="post__picture-link" data-slider>
    <?php foreach ($images as $index => $image): ?>
        <img src="<?= $image['image'] ?>" alt="picture" class="post__picture" data-slide style="<?= $index === 0 ? '' : 'display: none;' ?>">
    <?php endforeach; ?>
    <?php if (count($images) > 1): ?>
        <button class="post__slider-btn post__slider-btn--prev" data-prev>
            <img src="settings/svg/Slider-Button.svg" alt="prev">
        </button>
        <button class="post__slider-btn post__slider-btn--next" data-next>
            <img src="settings/svg/Slider-Button.svg" alt="next">
        </button>
        <div class="post__count" data-counter>1/<?= count($images) ?></div>
<?php endif; ?>
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
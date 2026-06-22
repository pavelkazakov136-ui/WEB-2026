<div class="post">
    <div class="post__author">
        <img src="<?= $post['avatar'] ?>" alt="avatar" class="post__avatar">
        <h1 class="post__name"><?= $post['author'] ?></h1>
        <?php if ($post['canEdit']): ?>
            <img src="settings/svg/pen.svg" alt="pen" class="post__pen">
        <?php endif; ?>
    </div>
    <a href="/lab5/post?id=<?= $post['id'] ?>" class="post__picture-link">
        <img src="<?= $post['img'] ?>" alt="picture" class="post__picture">
        <?php if ($post['count'] != ''): ?>
            <div class="post__count"><?= $post['count'] ?></div>
        <?php endif; ?>
    </a>
    <?php if ($post['count'] != ''): ?>
        <button class="post__slider-btn">
                <img src="settings/svg/Slider-Button.svg" alt="slide">
        </button>
    <?php endif; ?>
    <div class="post__likes">
        <img src="settings/img/like.png" alt="like" class="post__like">
        <?= $post['likes'] ?>
    </div>
    <div class="post__content">
        <p class="<?= isset($isFullPost) ? 'post__text-full' : 'post__text' ?>"><?= $post['text'] ?></p>
        <?php if (!isset($isFullPost) && strlen($post['text']) > 86): ?>
            <button class="post__more-btn">ещё</button>
        <?php endif; ?>
        <div class="post__after"><?= $post['time'] ?></div>
    </div>
</div>
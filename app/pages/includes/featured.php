<div class="featured-post">
    <a href="<?= ROOT ?>/post/<?= $row['slug'] ?>">
        <div class="title">
            <h2><?= $row['title'] ?></h2>
            <span class="author">-Khulla Samachar</span>
            <span class="block"><?= date("jS M, Y", strtotime($row['post_date'])) ?></span>
        </div>
        <div class="featured-img-container">
            <img src="<?= get_image($row['image']) ?>">
        </div>
        <div class="information">
            <p><?= substr($row['content'], 0, 100) ?></p>
        </div>
    </a>
</div>
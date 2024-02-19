<div class="col-lg-3 col-md-6">
    <div class="newsbox">
        <a href="<?= ROOT ?>/post/<?= $row['slug'] ?>">
            <div class="pri-news-cat">
                <h4><?= ($row['category'] ?? 'Unkown') ?></h4>
            </div>
            <div class="pri-news-img-container">
                <img src="<?= get_image($row['image']) ?>">
            </div>
            <div class="pri-title">
                <p><?= $row['title'] ?></p>
            </div>
        </a>
        <div class="author"><span><?= date("jS M, Y", strtotime($row['post_date'])) ?></span></div>
    </div>
</div>
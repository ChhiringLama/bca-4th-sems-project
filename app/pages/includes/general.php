<div class="col-md-3 col-sm-6">
    <div class="news">
    <a href="<?= ROOT ?>/post/<?= $row['slug'] ?>">
            <div class="img">
            <img src="<?= get_image($row['image']) ?>">
            </div>
            <div class="info">
                <h3>
                <?=$row['title']?>
                </h3>
                <div class="upload-detail">
                    <i class="fa-regular fa-clock"></i>
                    <div class="author"><span><?=date("jS M, Y",strtotime($row['post_date']))?></span></div>
                </div>
            </div>
        </a>
    </div>
</div>
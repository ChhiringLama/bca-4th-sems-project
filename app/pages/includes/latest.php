<div class="cat-3-feat-post">
    <!-- <a href="#" class="int-featured-container"> -->
    <a href="<?= ROOT ?>/post/<?= $row['slug'] ?>">
        <!-- <div class="int-featured-image"> -->
        <div class="cat-3-feat-img">
            <img src="<?= get_image($row['image']) ?>">
        </div>
        <!-- <div class="int-featured-info"> -->
        <div class="cat-3-feat-info">
            <h5 class="hov-eff-txt hover-transition">
                <h4><?= $row['title'] ?></h4>
            </h5>
            <p><?= substr($row['content'], 0, 30) ?>
            </p>
            <div class="upload-detail">
                <i class="fa-regular fa-clock"></i>
                <span class="block"><?= date("jS M, Y", strtotime($row['post_date'])) ?></span>
            </div>
        </div>

    </a>
</div>
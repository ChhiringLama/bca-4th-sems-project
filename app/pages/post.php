<?php
$pagetitle = "Khulla Samachar";
require 'assets/partials/header.php';
include 'assets/partials/navigation.php';

// Check if the 'slug' query parameter is set
$slug = $url[1] ?? null;

if ($slug) {
    $query = "SELECT posts.*, categories.category FROM posts JOIN categories ON posts.category_id = categories.id WHERE posts.slug = :slug LIMIT 1";
    $row = query_row($query, ['slug' => $slug]);

    if (!empty ($row)) { ?>
        <div class="mx-auto mastercontainer">
            <div class="featured-post singlepage">
                <div class="title singlepage-title">
                    <h2><?= $row['title'] ?></h2>
                    <span class="block"><?= date("jS M, Y", strtotime($row['post_date'])) ?></span>
                </div>
                <div class="featured-img-container singlepage-img">
                    <img src="<?= get_image($row['image']) ?>">
                </div>
                <div class="information singlepage-info">
                    <p><?= $row['content'] ?></p>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo "Post not found.";
    }
} else {
    echo "Slug not provided.";
}
require 'assets/partials/footer.php';
?>

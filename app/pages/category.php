<?php
$pagetitle = "Category";
require 'assets/partials/header.php' ?>

<body>


    <div class="mastercontainer">
        <div class="header">
            <div class="header-container">

                <div class="logo">
                    <a href="index"><img src="<?=ROOT?>/images/logo.png" alt="logo">
                        <span>Khulla Samachar</span>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="header-icons">
                        <i class="fa-solid fa-clock"></i>
                        <div id="clock"></div>
                        <i class="fa-solid fa-calendar"></i>
                        <div id="calendar"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                    <ul class="links">
                        <li><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <!--Navigation starts from here,
        These contains:
        The navigation bar-->

    <div class="navigation-bar">
        <div class="mastercontainer">
            <div class="row">
                <div class="col-lg-8 col-md-9 nav-items">

                    <ul class="secondary-nav">

                        <li><a href="<?php echo ROOT ?>/home" class="active hov-eff-txt"> Home</a></li>
                        <li><a href="<?php echo ROOT ?>/contact" class="hov-eff-txt"> Contact</a></li>
                        <li><a href="<?php echo ROOT ?>/services" class="hov-eff-txt"> Services</a></li>
                        <li class="dropdown"><a href="#" class="hov-eff-txt">Categories</a>
                        <ul class="dropdown-menu">
                            <?php
                            $query = "select * from categories order by id desc";
                            $categories = query_2($query);

                            ?>
                            <?php if (!empty($categories)) : ?>
                                <?php foreach ($categories as $cat) : ?>
                                    <li><a class="hov-eff-txt" href="<?=ROOT?>/category/<?= $cat['slug']?>"> <?= $cat['category']?></a></li>   
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </li>
                    </ul>
                </div>
                <div class="search-bar col-lg-4 col-md-4">
                    <form action="<?= ROOT ?>/search" class="search-field" method=>
                        <div class="input-group">
                            <input name="find" type="text" placeholder="Search a news" id="" class="form-control search-input">
                            <button class="btn btn-primary">
                                Find
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Master container for all the news-->
    <div class="mastercontainer sec-break-padtb">
        <!--The primary news starts here-->
        <div class="primary-news sec-break-padtb">
            <div class="row">

                <?php
               $category_slug = $url[1] ?? null;

               if ($category_slug) {
                   // Connect to the database and retrieve posts from the specified category
                   $query = "SELECT posts.*, categories.category FROM posts JOIN categories ON posts.category_id = categories.id WHERE categories.slug = :category_slug ORDER BY posts.id";
               
                   $params = ['category_slug' => $category_slug];
                   $rows = query_3($query, $params);
               
                   if ($rows) {
                    foreach ($rows as $row) {
                        // Include the template for displaying news cards
                        include '../app/pages/includes/news-cards.php';
                    }
                } else {
                    echo "No items found in this category!";
                }
               } else {
                   echo "<h1>Please select a category.</h1>";
               }
               
                ?>
            </div>
        </div>
    </div>

    <?php require 'assets/partials/footer.php' ?>
</body>

</html>
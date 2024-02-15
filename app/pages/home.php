<?php
$pagetitle = "Khulla Samachar";
require 'assets/partials/header.php' ?>

<body>


    <div class="mastercontainer">
        <div class="header">
            <div class="header-container">

                <div class="logo">
                    <a href="index"><img src="images/logo.png" alt="logo">
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
                    <form action="<?=ROOT?>/search" class="search-field" method="get">
                        <div class="input-group">
                            <input name="find" type="text" placeholder="Search a news" id="" class="form-control search-input" value="<?= $_GET['find'] ?? '' ?>">
                        <button class=" btn btn-primary">
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
        <!-- The featured post starts here-->

        <?php
        $query = "select * from posts order by id desc limit 2";
        $rows = query_2($query);
        if ($rows) {
            foreach ($rows as $row) {
                include '../app/pages/includes/featured.php';
            }
        } else {
            echo "no items found!";
        }
        ?>


        <!--The primary news starts here-->
        <div class="primary-news sec-break-padtb">
            <div class="row">

                <?php
                $query = "SELECT posts.*, categories.category FROM posts JOIN categories ON posts.category_id = categories.id ORDER BY posts.id != 7 DESC LIMIT 8";

                $rows = query_2($query);
                if ($rows) {
                    foreach ($rows as $row) {
                        include '../app/pages/includes/news-cards.php';
                    }
                } else {
                    echo "no items found!";
                }
                ?>
            </div>
        </div>

        <div class="category-page">
            <section class="category-3 s-ptb">

                <!-- Internation news post starts here-->
                <!-- <div class="international-news"> -->
                <div class="cat-3">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="sec-title">
                                <h3>
                                    Latest News
                                </h3>
                            </div>
                            <!-- <div class="int-featured-news"> -->

                            <?php
                            $query = "select * from posts where category_id=9 order by id desc limit 2";
                            $rows = query_2($query);
                            if ($rows) {
                                foreach ($rows as $row) {
                                    include '../app/pages/includes/latest.php';
                                }
                            } else {
                                echo "no items found!";
                            }
                            ?>


                            <!-- category-3 grid news -->
                            <div class="display-grid-12">


                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="trending mb ">
                                <div class="sec-title">
                                    <h3>Trending</h3>
                                </div>
                                <?php
                                $query = "select * from posts where category_id=10 order by id desc limit 7";
                                $rows = query_2($query);
                                if ($rows) {
                                    foreach ($rows as $row) {
                                        include '../app/pages/includes/trending.php';
                                    }
                                } else {
                                    echo "no items found!";
                                }
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
        </div>

        </section>

        <section class="category-17 s-ptb">


            <div class="sec-title">
                <h3>General</h3>
            </div>
            <div class="row">
                <?php
                $query = "select * from posts where category_id=11 order by id desc limit 6";
                $rows = query_2($query);
                if ($rows) {
                    foreach ($rows as $row) {
                        include '../app/pages/includes/general.php';
                    }
                } else {
                    echo "no items found!";
                }
                ?>



            </div>

        </section>
    </div>

    <?php require 'assets/partials/footer.php' ?>
</body>

</html>
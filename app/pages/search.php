<?php
$pagetitle = "search";
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
                                <li><a href="#" class="hov-eff-txt">Economics</a></li>
                                <li><a href="#" class="hov-eff-txt">Sports</a></li>
                                <li><a href="#" class="hov-eff-txt">Music</a></li>
                                <li><a href="#" class="hov-eff-txt">Health</a></li>
                                <li><a href="#" class="hov-eff-txt">Politics</a></li>
                                <li><a href="#" class="hov-eff-txt">Others</a></li>
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
                $find = $_GET['find'] ?? null;

                if ($find) {
                    $find = "%$find%";
                    $query = "SELECT posts.*, categories.category FROM posts JOIN categories ON posts.category_id = categories.id WHERE posts.title LIKE :find ORDER BY posts.id DESC LIMIT 4";
                    $params = ['find' => $find];
                    $rows = query_3($query, $params);

                    if ($rows) {
                        foreach ($rows as $row) {
                            include '../app/pages/includes/news-cards.php';
                        }
                    } else {
                        echo "No items found!";
                    }
                } else {
                    echo "Please enter a search term.";
                }
                ?>
            </div>
        </div>
    </div>

    <?php require 'assets/partials/footer.php' ?>
</body>

</html>
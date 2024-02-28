<div class="mastercontainer">
    <div class="header">
        <div class="header-container">

            <div class="logo">
                <a href="<?php echo ROOT?>"><img src="<?php echo ROOT ?>/images/logo.png" alt="logo">
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

                    <li><a href="<?php echo ROOT?>" class="active hov-eff-txt"> Home</a></li>
                    <li><a href="./contact" class="hov-eff-txt"> Contact</a></li>
                    <li><a href="./services" class="hov-eff-txt"> Services</a></li>
                    <li class="dropdown"><a href="#" class="hov-eff-txt">Categories</a>
                        <ul class="dropdown-menu">
                            <?php
                            $query = "select * from categories order by id desc";
                            $categories = query_2($query);

                            ?>
                            <?php if (!empty($categories)) : ?>
                                <?php foreach ($categories as $cat) : ?>
                                    <li><a href="<?=ROOT?>/category/<?= $cat['slug']?>" class="hov-eff-txt"></a></li>   
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="search-bar col-lg-3 col-md-3">
                <form action="#" class="search-field">
                    <input type="text" placeholder="Search a news" id="" class="form-control search-input">
                </form>
                <span>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>

            </div>
            <div class="col-lg-1">
                <div class="dropdown">
                    <div class="profile">
                        <img src="images/blank-profile.jpg" alt="" id="profile-img">
                    </div>

                    <ul class="dropdown-menu" id="dropdown-menu">
                        <li><a href="./login">Sign In</a></li>
                        <li><a href="./signup">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
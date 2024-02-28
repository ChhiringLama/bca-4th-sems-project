<div class="mastercontainer">
        <div class="header">
            <div class="header-container">

                <div class="logo">
                    <a href=""><img src="<?php echo ROOT?>/images/logo.png" alt="logo">
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
                <div class="col-md-11 nav-items">
                    <ul class="secondary-nav">      
                        <li><a href="<?php echo ROOT?>/home" class="active hov-eff-txt">Back to Front Page</a></li>
                    </ul>
                </div>
               
                <div class="col-md-1">
                <div class="dropdown">
                    <div class="profile">
                        <img src="<?php echo ROOT?>/images/blank-profile.jpg" alt="" id="profile-img">
                    </div>
                    
                    <ul class="dropdown-menu" id="dropdown-menu">
                        <li><a href="./admin">Dashboard</a></li>
                        <li><a href="./logout">Log Out</a></li>
                        
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="<?php echo ROOT?>/assets/js/script.js"></script>
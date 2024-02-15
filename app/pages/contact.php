<?php
$pagetitle = "All News";
require 'assets/partials/header.php';
require 'assets/partials/navigation.php' ?>

<div class="contact-us">
    <div class="mastercontainer">
        <div class="content">


            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6"> <label for="firstname" style="display: block;">Firstname:</label>
                        <input type="text" name="firstname style="display: block;"">
                        <label for="lastname" style="display: block;">Lastname:</label>
                        <input type="text" name="lastname" style="display: block;">
                    </div>
                    <div class="col-md-6"> <label for="email" style="display: block;">Email:</label>
                        <input type="email" name="email" style="display: block;">
                        <label for="message" style="display: block;">Leave your message</label>
                        <textarea name="message" id="" cols="30" rows="10" style="display: block;"></textarea>
                    </div>
                </div>


            </form>
        </div>
    </div>

</div>


<?php include 'assets/partials/footer.php' ?>
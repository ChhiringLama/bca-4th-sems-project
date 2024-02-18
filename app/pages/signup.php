<?php
$pagetitle = "Sign Up";
require 'assets/partials/header.php';

if (!empty($_POST)) {
    //validation 
    $errors = [];
    //username
    if (empty($_POST['username'])) {
        $errors['username'] = "A username is required";
    } else if (!preg_match("/^[a-zA-Z]+$/", $_POST['username'])) {
        $errors['username'] = "Username can only have letters and no spaces";
    } else if(strlen($_POST['username'])<3){
        $errors['username'] = "Username cannot be less than 3 letters";
    }
    //password and retype password validation
    if (empty($_POST['password'])) {
        $errors['password'] = "A password is required";
    } else if (strlen($_POST['password']) < 8) {
        $errors['password'] = "Password must be 8 character or more";
    } else if ($_POST['password'] !== $_POST['retype_password']) {
        $errors['password'] = "Passwords do not match";
    }

    //email
    $query = "select id from users where email = :email limit 1";
    $email = query($query, ['email' => $_POST['email']]);

    if (empty($_POST['email'])) {
        $errors['email'] = "A email is required";
    } else if ($email) {
        $errors['email'] = "Email already in use";
    }else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        $errors['email']="Email is invalid";
    }


    if (empty($errors)) {
        //save to database
        $data = [];
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['role'] = "normal_user";
        $query = "insert into users (username,email,password,role) values (:username,:email,:password,:role)";
        query($query, $data);

        redirect('login');
    }
}
?>

<body>
    <section class="form-section">
        <div class="form-contain">
            <h2>Sign Up</h2>

            <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>

           
            <form method="post" action="#">
               
                <label class="form-label" for="user-name">User Name</label>
                <input class="form-input form-control" value="<?= old_value('username') ?>" type="text" name="username" id="" placeholder="Enter your Full Name">
                <?php if (!empty($errors['username'])) : ?>
                    <div class="text-danger"><?= $errors['username'] ?></div>
                <?php endif; ?>
              
                
                <label class="form-label" for="email">Email</label>
                <input class="form-input form-control" value="<?= old_value('email') ?>" type="text" name="email" id="" placeholder="Enter your Email">
                <?php if (!empty($errors['email'])) : ?>
                    <div class="text-danger"><?= $errors['email'] ?></div>
                <?php endif; ?>
              
                
                <label class="form-label" for="password">Password</label>
                <input class="form-input form-control" value="<?= old_value('password') ?>" type="text" name="password" id="" placeholder="Enter your Password">
                <?php if (!empty($errors['password'])) : ?>
                    <div class="text-danger"><?= $errors['password'] ?></div>
                <?php endif; ?>
                
              
                <label class="form-label" for="confirm-password">Confirm Password</label>
                <input class="form-input form-control" value="<?= old_value('username') ?>" type="text" name="retype_password" id="" placeholder="Confirm your Password">
         
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="backtohome btn"><a href="<?php echo ROOT ?>/home">Home</button>

                <p class="my-2">Already a member? <a href="<?php echo ROOT ?>/login">Sign in from here</a></p>

            </form>

        </div>
    </section>

</body>

</html>
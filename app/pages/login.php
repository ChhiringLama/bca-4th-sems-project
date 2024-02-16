<?php

$pagetitle = "Log in";
require 'assets/partials/header.php';


if (!empty($_POST)) {
    // Validation 
    $errors = [];

    $enteredEmail = $_POST['email'];
    $enteredPW = $_POST['password'];

    // Establish database connection
    $con = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);

    // Check if connection is successful
    if (!$con) {
        die("Database connection failed.");
    }

    $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
    $stmt = $con->prepare($query);
    $stmt->execute(['email' => $enteredEmail]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && isset($row['email'])) {
        $accessedEmail = $row['email'];
        $accessedPW = $row['password'];

        if ($enteredEmail === $accessedEmail && $_POST['password'] === $row['password']) {
            $_SESSION['image'] = $row['image'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']=$row['role'];

            authenticate($row);
            redirect('admin'); // Redirect to admin page
        } else {
            $errors['email'] = "Wrong Email or Password";
        }
    } else {
        $errors['email'] = "Please fix the problem";
    }
}
?>

<body>
    <section class="form-section">
        <div class="form-contain">
            <h2>Sign In</h2>

            <?php if (!empty($errors['email'])) : ?>
                <div class="alert alert-danger"><?= $errors['email'] ?></div>
            <?php endif; ?>

            <form method="post">
                <label class="form-label" for="email">Email</label>
                <input value="<?= old_value('email') ?>" class="form-input form-control" type="text" name="email" id="" placeholder="Enter your email">

                <label class="form-label" for="password">Password</label>
                <input value="<?= old_value('password') ?>" class="form-input form-control" type="password" name="password" id="" placeholder="Enter your password">

                <button type="submit" class="btn btn-primary">Sign In</button>
                <p>Not a member? <a href="<?php echo ROOT ?>/signup">Register</a></p>
            </form>
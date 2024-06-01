<?php
include('partials/header.php');
include('_inc/classes/User.php'); 

$user = new User();

if (isset($_POST['login_user'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $logged_in = $user->login($email, $password);
    if ($logged_in) {
        
        header('Location: admin.php');
        exit();
    } else {
        echo "Invalid email or password. Please try again.";
    }
}
?>

<div class="header text-center">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" required>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Register</a>
    </p>
</form>

<?php include('partials/footer.php'); ?>


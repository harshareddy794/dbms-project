<?php
   include('includes/functions.php');
   if(isLoggedIn())
     session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SBU  | LogIn</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color: rgb(140,200,250);">

    <div class="header">
        <h1>Sathyabama College</h1>
    </div>

    <div class="login-clean" style="background-color: rgb(140,200,250);">
        <center><h1>Login</h1></center>

        <form action="login_script.php" method="post" style="background-color: rgb(150,215,245);">
            <h2 class="sr-only">Login Form</h2>

            <div class="illustration">
                <i class="fas fa-user-md" style="color: rgb(30,20,100);"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="emailid" placeholder="Email" style="background-color: rgb(215,240,250);" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" style="background-color: rgb(215,240,250);" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(30,20,100);" name="login_btn">Log In</button>
            </div>
            <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
        </form>


    </div>

    <?php
        include 'includes/footer.php';
    ?>

</body>

</html>

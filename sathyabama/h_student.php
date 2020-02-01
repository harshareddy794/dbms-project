<?php
  include('includes/functions.php');

  if (!isStudent())
  {
    echo'<script>alert("You must log in first");</script>';
	header('location: login.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Student Home Page</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

    <body>
        <div class="header">
            <h1>Sathyabama College</h1>
        </div>

        <div class="container">
            <br><br>
            <h3 class="text-center" style="color:blue;"> </h3><br><br>

            <div class="form">

                <h4>Welcome <?php echo $_SESSION['sess_username']; ?>!</h4><br><br>
				<p><a href="cbss.php">CBSS Registration</a></p>

                <p><a href="logout.php">Logout</a></p>
                <br /><br /><br /><br />
            </div>

        </div>

    </body>
</html>

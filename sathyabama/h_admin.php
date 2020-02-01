<?php
  include('includes/functions.php');

  if (!isAdmin())
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

    <title>SDC | Admin Page</title>

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
    <div class="form">

      <p>Welcome <?php echo $_SESSION['sess_username']; ?>!</p>

      <p><a href="r_add_users.php">Add New User</a></p>
      <p><a href="r_view_users.php">Manage Users</a></p>
      <p><a href="r_add_dept.php">Add New Department</a></p>
      <p><a href="r_view_depts.php">Manage Departments</a></p>

      <p><a href="logout.php">Logout</a></p>
      <br /><br /><br /><br />
    </div>

    </div>
    </body>
</html>

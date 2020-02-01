<?php
  include('includes/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>SDC | Registration Page</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="header">
        <h1>Sathyabama College</h1>
      </div>

      <br><br><br>
      <h5 class="text-center">
        <a href="dashboard.php">DashBoard</a> |
        <a href="logout.php">Logout</a>
      </h5>   <br>

<div class="form text-center">
    <h1>Registration</h1><br><br>

    <div class="row register-form">
      <div class="col-md-8 offset-md-2">
          <form class="custom-form" name="registration" action="registration.php" method="post">

            <div class="form-row form-group">
              <div class="col-sm-4 label-column">
                <label class="col-form-label" for="username"> Name :</label>
              </div>
              <div class="col-sm-6 input-column">
                <input class="form-control" type="text" name="username" required>
              </div>
            </div>

            <div class="form-row form-group">
              <div class="col-sm-4 label-column">
                <label class="col-form-label" for="emailid"> Email Id :</label>
              </div>
              <div class="col-sm-6 input-column">
                <input class="form-control" type="email" name="emailid" required>
              </div>
            </div>

            <div class="form-row form-group">
              <div class="col-sm-4 label-column">
                <label class="col-form-label" for="password">Password  :</label>
              </div>
              <div class="col-sm-6 input-column">
                <input class="form-control" type="password" name="password" required>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="form-row form-group">
                <div class="col-sm-12 input-column">
                    <input class="form-control" type="submit" style="background-color: cornflowerblue;" name="register_btn">
                </div>
            </div>

            <input name="u_type" hidden value="student">


        <p> Already a member? <a href="login.php">Sign in</a></p>

    </form>
    <br><br>

</div>

</body>
</html>

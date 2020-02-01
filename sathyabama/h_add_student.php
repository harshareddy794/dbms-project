<?php
  include('includes/functions.php');

  if (!isHOD() || !isLoggedIn())
  {
    header('location: index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>SIST | Add Student</title>

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


<div class="form">
  <h1 class="text-center">Add a Student </h1><br><br>
<div class="row register-form">
  <div class="col-md-8 offset-md-2">
      <form class="custom-form" name="registration" action="h_add_student.php" method="post">

        <div class="form-row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="s_name"> Name :</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="text" name="s_name" required>
          </div>
        </div>

        <div class="form-row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="reg_no"> Registration Number :</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="int" name="reg_no" required>
          </div>
        </div>

        <div class="form-row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="text"> Section :</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="text" name="s_sec" required>
          </div>
        </div>

        <div class="form-row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="s_phno"> Phone Number</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="int" name="s_phno" required>
          </div>
        </div>

        <div class="form-row form-group">
          <div class="col-sm-4 label-column">
            <label class="col-form-label" for="s_eid"> Email Id :</label>
          </div>
          <div class="col-sm-6 input-column">
            <input class="form-control" type="email" name="s_eid" required>
          </div>
        </div>
        <!-- Submit Button -->
        <div class="form-row form-group">
            <div class="col-sm-12 input-column">
                <input class="form-control" type="submit" style="background-color: cornflowerblue;" name="add_student" value="Add Student">
            </div>
        </div>

</form>
<br><br>

</div>

</body>
</html>

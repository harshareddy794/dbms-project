<?php
  include('includes/functions.php');

  if (!isAdmin() || !isLoggedIn())
  {
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Adding Users</title>

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
    <h1>Adding Departments</h1><br><br>

    <div class="row register-form">
      <div class="col-md-8 offset-md-2">
          <form class="custom-form" name="registration" action="r_add_dept.php" method="post">

            <div class="form-row form-group">
              <div class="col-sm-4 label-column">
                <label class="col-form-label" for="dep_code"> Department Code :</label>
              </div>
              <div class="col-sm-6 input-column">
                <input class="form-control" type="number" name="dep_code" required>
              </div>
            </div>

            <div class="form-row form-group">
              <div class="col-sm-4 label-column">
                <label class="col-form-label" for="sdep_name"> Department Name [Short] :</label>
              </div>
              <div class="col-sm-6 input-column">
                <input class="form-control" type="text" name="sdep_name" required>
              </div>
            </div>

            <div class="form-row form-group">
              <div class="col-sm-4 label-column">
                <label class="col-form-label" for="dep_name"> Department Name [Long]</label>
              </div>
              <div class="col-sm-6 input-column">
                <input class="form-control" type="text" name="dep_name" required>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="form-row form-group">
                <div class="col-sm-12 input-column">
                    <input class="form-control" type="submit" style="background-color: cornflowerblue;" name="add_department" value="Add Department">
                </div>
            </div>

    </form>
    <br><br>



</div>

</body>
</html>

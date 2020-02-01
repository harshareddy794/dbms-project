<?php
  include('includes/functions.php');

  if (!isAdmin())
  {
    echo'<script>alert("You must log in first");</script>';
 	  header('location: login.php');
  }
  // for deleting user
  if(isset($_GET['id']))
  {
    global $con;
    $s_id = $_GET['id'];
    $msg=mysqli_query($con,"DELETE FROM users WHERE id='$s_id'");
    if($msg)
    {
      echo "<script>alert('Student Data deleted');</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title> SIST | Admin | Manage Users </title>

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

    <div class="container">
      <h3 class="text-center" style="color:blue;">Users Present : </h3><br>

      <div class="col-sm-12">

       <div class="table-responsive">
        <table class="table table-bordered table-hover" >

            <tbody>
                <thead class="table-primary">
                    <tr class="text-center">
                        <th style="width:10% ;">S.No</th>
                        <th style="width:30% ;">Name</th>
                        <th style="width:20% ;">Email</th>
                        <th style="width:10% ;">User Type</th>
                        <th style="width:10% ;">Delete </th>


                    </tr>
                </thead>

                <?php
                  $con = mysqli_connect('localhost','root','','c_dbms');
                  $count=1;
                  $dept = $_SESSION['sess_dept'];
                  $sel_query="SELECT * FROM users";  //should be changed to  this department table name
                  $result = mysqli_query($con,$sel_query);
                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>

                <tr class="table-info">
                    <td align="center"><?php echo $count; ?></td>
                    <td align="center"><?php echo $row["name"]; ?></td>
                    <td align="center"><?php echo $row["email"]; ?></td>
                    <td align="center"><?php echo $row["u_type"]; ?></td>
                    <td align="center"><a href="r_view_users.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>

                <?php $count++; } ?>
            </tbody>
        </table>
    </div>
    </div>

    </div>
  </body>
</html>

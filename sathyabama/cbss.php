<?php
  include('includes/functions.php');

  if (!isStudent())
  {
    echo'<script>alert("You must log in first");</script>';
	header('location: login.php');
  }

?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cbss</title>
<body style="background-color:#d9ffb3;">

<style>
input,textarea{width:200px}
input[type=radio],input[type=checkbox]{width:10px}
input[type=submit],input[type=reset]{width:100px}

</style>
</head>

<body><center>
<h2>CBSS FORM</h2>
<form method="post" action="cbss.php" enctype="multipart/form-data">
<table width="393" border="1">
 <tr>
 	<td colspan="2"><?php echo @$msg; ?></td>
 </tr>
  <tr>
    <td width="159">Enter your Name</td>
    <td width="218">
	<input type="text" placeholder="your name"  name="n" pattern="[a-z A-Z]*" required /></td>
  </tr>
  <tr>
    <td>Enter your Department</td>
     <td><input type="text" placeholder="department" required name="e"/></td>
  </tr>
  <tr>
    <td>Select CBSS</td>
    <td><select type="text" placeholder="Subject" required name="p" name="p">
    <option value="Python">Python</option>
    <option value="IOT">IOT</option>
    <option value="R Programming">R Programming</option>
  </select>
  </tr>
  <tr>
    <td>Enter your Register No</td>
    <td><textarea type="number" placeholder="Register No" required name="r"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="save" value="Enter"/>
	<a href="h_student.php">Back</a>
	</td>
  </tr>
</table>
</form>
</center>
<?php

//if (isset($_POST['action']) && $_POST['action'] == 'submit'){
if ( $_SERVER['REQUEST_METHOD'] === 'POST' )
{
$a=$_REQUEST['n'];
$b=$_REQUEST['e'];
$c=$_REQUEST['p'];
$d=$_REQUEST['r'];

$query="INSERT INTO studentdetails values('$a','$b','$c','$d')";
$qurey_run=mysqli_query($con,$query);
	if($qurey_run)
	{
	echo '<script>alert("Successfully Saved ")</script>';
	}
	else
	{
	echo 'error';
	}
}
//$msg= "<font color='blue'>Your data saved</font>";
$con->close();
?>
</body>
</html>
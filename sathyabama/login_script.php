<?php
   include('includes/functions.php');

    if (isset($_POST['login_btn']))
    {
		login();
    }

    function login()
    {
        global $con;

        $emailid = stripslashes($_POST['emailid']); // removes backslashes
        $emailid = e($emailid);

        $password = stripslashes($_POST['password']);
        $password = e($password);

	    //Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE email='$emailid' and pswd='".md5($password)."'";

        $result = mysqli_query($con,$query) or die(mysqli_error());
		    $rows = mysqli_num_rows($result);
        if($rows==1)
        {
            echo $emailid;
            $row = mysqli_fetch_array($result);
            $_SESSION['emailid'] = $emailid;
            $_SESSION['sess_user_id'] = $row['id'];
            $_SESSION['sess_dept'] = $row['dept'];
            $_SESSION['sess_username'] = $row['name'];
            $_SESSION['sess_u_type'] = $row['u_type'];

            if(isAdmin())
            {
                header('Location: h_admin.php');
            }

            elseif(isHOD())
            {
                header('Location: h_hod.php');
            }

            elseif(isStudent())
            {
                header('Location: h_student.php');
            }

			//header("Location: index.php"); // Redirect user to index.php
        }
        else
        {
			       echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    } //end of function

?>

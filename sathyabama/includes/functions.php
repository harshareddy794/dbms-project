<?php
    session_start();

    $database = 'c_dbms';
    $host = 'localhost';
    $user = 'root';
    $pass = '';

    // try to conncet to database
    $con = mysqli_connect($host,$user,$pass,$database);

    if (isset($_POST['register_btn']))
    {
		    register();
    }

    if (isset($_POST['add_student']))
    {
        addStudent();
    }

    if (isset($_POST['add_department']))
    {
        addDepartment();
    }

    if (isset($_POST['add_users']))
    {
        addUser();
    }

    function isLoggedIn()
	   {
        if (isset($_SESSION['sess_username']))
        {
			       return true;
        }
        else
        {
			       return false;
		    }
	    }

	function isStudent()
	{
        if (isset($_SESSION['sess_username']) && $_SESSION['sess_u_type'] == "student" )
        {
			       return true;
        }else
        {
			       return false;
		     }
    }

    function isAdmin()
    {
          if (isset($_SESSION['sess_username']) && $_SESSION['sess_u_type'] == "admin" )
          {
               return true;
          }else
          {
               return false;
           }
      }

      function isHOD()
    	{
            if (isset($_SESSION['sess_username']) && $_SESSION['sess_u_type'] == "hod" )
            {
    			       return true;
            }else
            {
    			       return false;
    		     }
        }

	// escape string
    function e($val)
    {
        global $con;
		return mysqli_real_escape_string($con, trim($val));
    }

    function studentExists_bstudent($s_email)
        {
            global $con;
            $query = "SELECT * FROM b_student WHERE s_eid='$s_email'";

            $result = mysqli_query($con,$query) or die(mysqli_error($con));
    		    $rows = mysqli_num_rows($result);
            if($rows==1)
            {
              return true;
            }
            else
            {
                return false;
            }
        }

        function studentExists_users($s_email)
            {
                global $con;
                $query = "SELECT * FROM users WHERE email='$s_email'";

                $result = mysqli_query($con,$query) or die(mysqli_error($con));
                $rows = mysqli_num_rows($result);
                if($rows==1)
                {
                  return true;
                }
                else
                {
                    return false;
                }
            }

function update_reg_status($s_email)
{
  global $con;
  $query = "UPDATE b_student SET ureg_status = '1' WHERE s_eid = '$s_email'";
  $result = mysqli_query($con,$query) or die(mysqli_error($con));
}


    function register()
    {
        global $con;

        $username = stripslashes($_POST['username']); // removes backslashes
        $username = e($username);

		     $emailid = stripslashes($_POST['emailid']);
		     $emailid = e($emailid);

        $password = stripslashes($_POST['password']);
        $password = e($password);
        $role1= $_POST['u_type'];

		    $trn_date = date("Y-m-d H:i:s");

        if(studentExists_users($emailid))
        {
          echo '<script>alert("Student exists. Redirecting to Login Page.");</script>';
          header('Location: login.php');
        }

        else
        {
          if(studentExists_bstudent($emailid))
          {
            $query = "INSERT into `users` (name, pswd, email, trn_date, u_type) VALUES ('$username', '".md5($password)."', '$emailid', '$trn_date','$role1')";
            $result = mysqli_query($con,$query) or die(mysqli_error($con));
            if($result)
            {
                echo'<script>alert("You are registered successfully.");</script>';
                update_reg_status($emailid);
                header('Location: login.php');
            }
          }
          else
          {
              echo '<script>alert("A Student with the given E-mail Not Found.");</script>';
          }
        }

    }


function addStudent()
{
    global $con;
    $dept = $_SESSION['sess_dept'];

    $s_name = $_POST['s_name'];
    $s_name = e($s_name);

    $reg_no = $_POST['reg_no'];
    $s_phno = $_POST['s_phno'];

    $s_eid = $_POST['s_eid'];
    $s_eid = e($s_eid);

    $s_sec = $_POST['s_sec'];
    $s_sec = e($s_sec);

    $date_created = date("Y-m-d H:i:s");


    if(!studentExists_bstudent($s_eid))
    {
      $query = "INSERT INTO `b_student` (s_name, reg_no, s_dept, s_eid, s_phno, s_sec) VALUES ('$s_name', '$reg_no', '$dept', '$s_eid','$s_phno','$s_sec')";
      $result = mysqli_query($con,$query) or die(mysqli_error($con)) ;
      if($result)
      {
          echo'<script>alert("Student added.");</script>';
      }
    }
    else
    {
        echo'<script>alert("Student not added.");</script>';
    }

}

function deptExists($d_code)
    {
        global $con;
        $query = "SELECT * FROM depts WHERE dep_code='$d_code'";

        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {
          return true;
        }
        else
        {
            return false;
        }
    }

function addDepartment()
{
    global $con;

    $dep_code = $_POST['dep_code'];

    $sdep_name = $_POST['sdep_name'];
    $sdep_name = e($sdep_name);

    $dep_name = $_POST['dep_name'];
    $dep_name = e($dep_name);

    $date_created = date("Y-m-d H:i:s");

    if(deptExists($dep_code))
    {
      echo '<script>alert("Department exists.");</script>';
    }
    else
    {
      $query = "INSERT INTO `depts` (dep_code, sdep_name, dep_name, date_created) VALUES ('$dep_code', '$sdep_name', '$dep_name', '$date_created')";
      $result = mysqli_query($con,$query) or die(mysqli_error($con)) ;
      if($result)
      {
          echo'<script>alert("Department Added.");</script>';
      }
      else
      {
          echo'<script>alert("Department not added.");</script>';
      }
    }

}

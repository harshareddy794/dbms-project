<?php
   include('includes/functions.php');
   if(isAdmin())       { header('Location: h_admin.php'); }

   elseif(isHOD())     { header('Location: h_hod.php');   }

   elseif(isStudent()) { header('Location: h_student.php'); }

?>

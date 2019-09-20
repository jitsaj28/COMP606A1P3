
<?php

require "config.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM login where username= '".$username."' and password= '".$password."'";

$exec = mysqli_query($conn,$sql); 
          $fet = mysqli_fetch_array($exec);
		 
 if(mysqli_num_rows($exec)>0)
		 {
    $_SESSION['username']= $fet['username'];;
  header('Location: Home_c.php');
    
 }
else
		{
					 ?>
				 <script>
					 alert("wrong password or email");
					 window.location = 'index.php';
				 </script>
					<?php
		   }
    
$conn->close();
?>
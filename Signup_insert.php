<?php
require_once "config.php";
    $username = $_REQUEST["username"];
    $password1 = $_REQUEST["pass1"];    
    $name = $_REQUEST["name"];
    $payment = $_REQUEST["payment"];
    $dob = $_REQUEST["DOB"];
    $address = $_REQUEST["address"];
    
$sql = "INSERT INTO therapy_booking(email,name,dob,payment,address)
VALUES ('".$username. "', '".$name. "', '".$dob. "','".$payment. "','".$address. "')";
$sql1 = "insert into login (username,password) values('".$username. "','".$password1. "');";


if ($conn->query($sql)) {

    $conn->query($sql1);
      
	 
	  ?>
				 <script>
					 alert("Successfully Inserted");
					 window.location = 'index.php';
				 </script>
					<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
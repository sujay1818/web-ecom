<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
session_start();
		$servername = "localhost";
		$username = "sumedh";
		$password = "1234";
		$db = "ecom";
		$fname;

    $userid=$_SESSION['uid'];
  
		// Create connection
		$con = mysqli_connect($servername, $username, $password,$db);
		
		// Check connection
		if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
		}

		$query="Select * from user_info where user_id='$userid'";
		$result = $con->query($query);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$fname=$row['first_name'];
				$lname=$row['last_name'];
				$address1=$row['address1'];
				$mobile=$row['mobile'];
				$address2=$row['address2'];
				$email=$row['email'];
			
			}
		} else {
			
		}


    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $email1 = $_POST['email'];
    $mobile1 = $_POST['mobile'];
    $address11 = $_POST['address1'];
    $address21= $_POST['address2'];
    $name = "/^[a-zA-Z ]+$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    $number = "/^[0-9]+$/";

    if(empty($f_name) && empty($l_name) && empty($email1) && empty($mobile1) && empty($address11) && empty($address21)){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>The profile has not been edited</b>
			</div>
		";

	}
  else{
    if(!empty($f_name)){
      $fname=$f_name;
      echo $fname;
    }
    if(!empty($l_name)){
      $lname=$l_name;
    }
    if(!empty($email1)){
      $email=$email1;
    }
    if(!empty($address11)){
      $address1=$address11;
    }
    if(!empty($address21)){
      $address2=$address21;
    }
    if(!empty($mobile1)){
      $mobile=$mobile1;
    }
  }
  
  $updatequery="update user_info set first_name='$fname',last_name='$lname',email='$email',mobile='$mobile',address1='$address1',address2='$address2' where user_id='$userid'";

if (mysqli_query($con, $updatequery)) {

} 

  $_SESSION['name']=$fname;
		$con->close();
		header("Location: index.php");
		exit();
	?>

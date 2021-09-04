<?php
session_start();

	$userid= $_SESSION["uid"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		$servername = "localhost";
		$username = "sumedh";
		$password = "1234";
		$db = "ecom";
		$fname;
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
			echo "0 results";
		}
		$con->close();
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Profile</title>
</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Products</a>
			</div>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">Customer Profile Edit</div>
					<div class="panel-body">
					
					<form  action="success_edit.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control" placeholder="<?php echo $fname ?>" >
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control" placeholder="<?php echo $lname ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" placeholder="<?php echo $email ?>" >
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Contact Number</label>
								<input type="text" id="mobile" name="mobile"class="form-control" placeholder="<?php echo $mobile ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address 1</label>
								<input type="text" id="address1" name="address1"class="form-control" placeholder="<?php echo $address1 ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address 2</label>
								<input type="text" id="address2" name="address2"class="form-control" placeholder="<?php echo $address2 ?>">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Edit Profile" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<div id="success_edit">

	</div>
</body>
</html>
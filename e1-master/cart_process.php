

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Checkout</title>
</head>
<body>
<?php
            $userid = $_SESSION["uid"];
            include_once "db.php";
            $user=$_SESSION["uid"];
            
			//$query1="Insert into order values('$orderid','')";
            
            $query="delete from cart where user_id='$userid'";
            $runquery=mysqli_query($con,$query) or die(mysqli_errno($con));
        ?>
        <div class="box">
        <div class="in-box"><h2>Checkout Form</h2></div>
        <br><br><br><br><br>
    <h1> Payment success</h1>
    <br/>
    <br><br><br><br><br>
        <form action="index.php">
            <input type="submit" value="Go to main page">
        </form>
        </div>
</body>
</html>
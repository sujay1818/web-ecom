<?php
session_start();
include_once "db.php";
            $user=$_SESSION["uid"];
            $query="delete from cart";
            $runquery=mysqli_query($con,$query) or die(mysqli_errno($con));
?>

<script >
    alert("Payment Successful");
    window.location.href="index.php";
</script>
<script>
$(document).ready(function(){
	cat();
	brand();
	product();
	
	function cat(){
		$.ajax({
			url	:	"acton.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$("#get_category").html(data);
				
			}
		})
	}

	function brand(){
		$.ajax({
			url	:	"actin.php",
			method:	"POST",
			data	:	{brand:1},
			success	:	function(data){
				$("#get_brand").html(data);
			}
		})
	}
	
		function product(){
		$.ajax({
			url	:	"acton.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}
})
</script>

<?php
	include_once "db.php";
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));

	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$category = $row["cat_id"];
		
		}
	}
	
?>

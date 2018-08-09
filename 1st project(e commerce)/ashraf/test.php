<!DOCTYPE html>
<?php 
include ("includes/db.php"); 
?>
<html>
<head>
	<title>Admin Panel</title>
	
</head>
<body bgcolor="skyblue">
<form action="insert_product.php" method="post" enctype="multipart/form-data">
	
		<tr>
			<td align="right">Product Image:</td>
			<td><input type="file" name="product_image"></td>
			<input type="submit" name="submit">
		</tr>
		
</form>
</body>
</html>
<!-- Putting data from the form to the database -->
<?php 

if (isset($_POST['insert_post'])) {
	
	//image insertion
	$target_dir = "product_images/";
	$target_file = $target_dir . basename($_FILES['product_image']['name']);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	//database query to insert data to the database
	 $insert_product="INSERT INTO products(product_title,product_category,product_price,	product_description,product_image,product_keyword,product_type) 		VALUES('$product_title','$product_category','$product_price','$product_description','$target_file','$product_keyword','$product_type')";

	if(mysqli_query($con,$insert_product)){	
		echo "<script>alert('Product has been added')</script>";		
	}else{
		echo "ERROR: Could not able to execute sql. " . mysqli_error($con);
	}
		mysqli_close($con);

} 

?>
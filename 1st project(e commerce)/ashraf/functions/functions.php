<?php
$con = mysqli_connect("localhost","root","","onlineshoppers");

//getting the categories from mysql
function getCats(){
	global $con;
	$get_cats = "select * from catagories";
	$run_cats = mysqli_query($con, $get_cats);
	while ($row_cats = mysqli_fetch_array($run_cats)) {
		$cat_id =$row_cats['category_id'];
		$cat_title=$row_cats['category_title'];

		echo "<li><a href='#'>$cat_title</a></li>";
	}

}
//showing the type of products we are selling
function getTyp(){
	global $con;
	$get_type = "select * from types";
	$run_type = mysqli_query($con, $get_type);
	while ($row_type = mysqli_fetch_array($run_type)) {
		$type_id =$row_type['type_id'];
		$type_title=$row_type['type_title'];

		echo "<li><a href='#'>$type_title</a></li>";
	}

}
//showing the products in the home page in grid view 
function getProd(){
	if(!isset($_GET['category'])){

		if(!isset($_GET['type'])){

	global $con;
	$get_pro = "select * from products order by RAND() LIMIT 0,9";

	$run_pro = mysqli_query($con, $get_pro);

	while($row_pro = mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_title=$row_pro['product_title'];
		$pro_category=$row_pro['product_category'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
		
		echo"
		<div id='single_product'>
		<h3>$pro_title</h3>
		<div><img src='admin_area/product_images/$pro_image' width='200' height='200'/></div>
		<p><i>TK: $pro_price</i></p>
		</div>
		";
	}
	

}
}}

?>
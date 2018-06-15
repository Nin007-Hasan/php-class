<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

#menu{
	padding: 0;
	margin: 0;
	line-height: 55px;
	background: black;


}
#menu li{
	list-style: none;
	display: inline;

}
#menu a{
	text-decoration: none;
	color: white;
	padding: 20px;
	margin: 5px;
	font-size: 20px;
	font-family: COMIC SANS MS;


}
#menu a:hover{
	color:blue;
	font-weight: bolder;
	text-decoration: underline;
}

	</style>
</head>
<body>
	<ul id="menu">
	      <li><a href="#">Home</a></li>
	      <li><a href="#">My Account</a></li>
	      <li><a href="#">My Cart</a></li>
	      <li><a href="#">Sign Up</a></li>
	      <li><a href="#">About Us</a></li>
	    
	    	<!--Search bar section -->
	    	<div id="form">
	    		<form method="get" action="results.php" enctype="multipart/form-data">
	    		<input type="text" name="user_query" placeholder="search a product" style="width: 500px; height: 30px">
	    			<input type="submit" name="search" value="Search">
	    			
	    		</form>
	    	</div>

			</ul>

</body>
</html>
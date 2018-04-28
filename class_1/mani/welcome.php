<html>
<body>

<!-- Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["password"]; ?> -->

<?php 
	if($_GET["parijat"]==input)
	{
		header("Location: http://www.facebook.com");
		die();
	}

	else
	{
		header("Location: http://www.google.com");
		die();
	}
?>
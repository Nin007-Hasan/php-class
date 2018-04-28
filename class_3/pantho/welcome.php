<html>
<body>

<!-- Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["password"]; ?> -->

<?php 
 	
 	$x = $_GET["pan"];  
	$y = $_GET["tho"];

	$p=$x + $y;
	$q=$x - $y;
	$r=$x * $y;
	$s=$x / $y;

	echo "addition $p <br>";
	echo "subtraction $q <br>";
	echo "multiplication $r <br>";
	echo "division $s";
	
?>

</body>
</html>
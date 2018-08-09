<?php

$i=0;
while($i <=10 ) { 

	echo $i;
	echo "<br>";

	$i++;
}

$cars = array("Volvo", "BMW","Tata", "Toyota","Porche");
echo "I like  $cars[2] " ;
echo "<br>";
	echo "<br>";
echo "I hate $cars[0]";
	echo "<br>";
$color= array("Red", "Blue", "Green", "White", "Black" );
for ($j=0; $j <=4 ; $j++) { 
	echo "I love the color" .$color[$j]."<br>";
}

echo count($color);

$fruits=array("Mango" ,"Jackfruit", "Lichi", "Orange" );
foreach ($fruits as $key => $my) {
	echo "My fav fruits are $my"."<br>";
}


?>
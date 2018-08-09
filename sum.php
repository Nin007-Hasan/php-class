/*
	first take functin of a number then using for loop add the sum and num and return the sum
	then take an int and print it in sum
*/

<?php

	function sum($num) {
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++){
        $sum += $num[$i];
    }
    return $sum;
}
 
	$num = "711";
	echo sum($num);

?>
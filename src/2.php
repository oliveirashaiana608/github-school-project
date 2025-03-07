 <?php 
	$randomNumber = rand(0, 100); 
	if ($randomNumber < 50) { 
		echo "The number is less than 50"; 
	} else if ($randomNumber == 50) { 
		echo "The number is equal to 50"; 
	} else { 
		echo "The number is greater than 50"; 
	} 
?>
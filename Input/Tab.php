<?php
	$n = $_POST['valor'];
	
	for($i = 1;$i <= 10;$i++){
		echo "$n x $i = " . $i*$n . "<br/>"; 
	}
	

?>
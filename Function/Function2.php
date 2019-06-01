<?php
	function total(){
		$numeros = func_get_args();
		$qtd_nums = func_num_args();
		$soma = 0;
		for($i = 0; $i < $qtd_nums; $i++){
			$soma += $numeros[$i];
		}
	return $soma;
	}
	echo total(348, 102, 243, 763, 415, 217, 201, 477, 935);
	
	
?>
<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "etec";
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

	if(!$conn){
		echo "Deu ruim na conexão parça";
		die();
	}
	
	
?>

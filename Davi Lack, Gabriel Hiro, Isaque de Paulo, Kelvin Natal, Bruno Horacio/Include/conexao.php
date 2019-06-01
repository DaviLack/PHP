<?php
	function conexao(){
		$servidor = "localhost";
		$userdb = "root";
		$passdb = "";
		$banco = "Loja";
	
		$conn = mysqli_connect($servidor, $userdb, $passdb, $banco);

		if(!$conn){
			die("Deu ruim na conexão");
		};	
		return $conn;
	}
	function limitar($string, $tamanho, $encode = 'UTF-8') {
		if( strlen($string) > $tamanho )
			$string = mb_substr($string, 0, $tamanho - 3, $encode) . '...';
		else
			$string = mb_substr($string, 0, $tamanho, $encode);

		return $string;
	}
	
?>
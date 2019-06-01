<?php
	require_once "include/conexao.php";
	$conn = conexao();
	$nome_depto = $_POST['depto'];
	$sql = mysqli_query($conn, "INSERT INTO tbl_depto (nome_depto) VALUES ('" . $nome_depto . "')");
	$n = mysqli_affected_rows($conn);

	if($n == 1){
		echo "Departamento registrado com sucesso!";
	}
	
	else{
		echo "Erro";
	}
?>
<!DOCTYPE HTML>
<a href="Loja.php">Menu Principal</a>		
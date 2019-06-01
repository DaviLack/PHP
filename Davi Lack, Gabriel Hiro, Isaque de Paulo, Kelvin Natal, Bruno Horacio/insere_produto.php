<?php
	require_once "include/conexao.php";
	$conn = conexao();
	
	$nome_produto = $_POST['nome_produto'];
	$desc_produto = $_POST['desc_produto']; 
	$preco_produto = str_replace(",",".",$_POST['preco_produto']);
	//$img_produto = $_POST['img_produto'];
	$depto = $_POST['depto'];
	
	$tamanho = mt_rand(5,61);
	$all_str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$nomeimg = "";
	
	for($i=0;$i<=$tamanho;$i++){
		$nomeimg .= $all_str[mt_rand(0,61)];
	}
	$nome_temporario=$_FILES["img_produto"]["tmp_name"];
	$nome_real=$_FILES["img_produto"]["name"];
	$extensao_real = pathinfo($nome_real);
	$extensao_real = $extensao_real['extension'];
	$nome_final = $nomeimg . "." . $extensao_real;
	copy($nome_temporario,"img/$nome_final");
	
	$sql = mysqli_query($conn, "insert into tbl_produto values (default, '" . $nome_produto . "', '" . $desc_produto . "', " . $preco_produto . ", '" . $nome_final . "', '" . $depto . "');");
	
													
	$n = mysqli_affected_rows($conn);
	
	if($n == 1){
		echo "Produto registrado com sucesso!";
	}
	
	else{
		echo "Erro";
	}
?>	
<!DOCTYPE HTML>
<a href="Loja.php">Menu Principal</a>															
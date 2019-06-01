<?php session_start();
	if($_SESSION['logado'] == true){
		$nome = $_SESSION['nome'];
?>
	<!doctype html>
	<html>
	<head>
		<title>Lojinha do Carlos</title>
	</head>
	<body>
		<h1>Olá <?php echo $nome?></h1>
			<p> seu login foi efetuado com sucesso.</p>
			(<a href="validar.php?acao=sair">Sair</a>)
			
			
	</body>
</html>
<?php
	}
	else
	{
		$_SESSION['erro'] = 3;
		header("location:Form.php");
	}
?>

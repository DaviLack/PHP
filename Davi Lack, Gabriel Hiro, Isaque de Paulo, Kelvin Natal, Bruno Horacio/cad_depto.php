<?php
	require_once "include/conexao.php";
	$conn = conexao();
	$sqldepto = mysqli_query($conn, "Select * from tbl_depto order by nome_depto");
	$sqlprod = mysqli_query($conn, "Select * from tbl_produto order by rand() limit 0,8");

	session_start();
	if(!isset($_SESSION['erro']))
	{
		$_SESSION['erro'] = 0;
	};

	if(!isset($_SESSION['logado']))
	{
		$_SESSION['logado'] = false;
	};

?>
<!doctype html>
<html lang="pt-br">
	<head>
		<title> Título </title>
		<link rel = "stylesheet" type ="text/css" href="css/style.css"/>
		<meta charset = "UTF-8"/>
	</head>
	<body>
		<div id="wrapper">

			<?php require_once "include/header.php";

			require_once "include/menu.php";

			require_once "include/slider.php" ?>
			<br>

			<div id="cad_depto">
					<form action="insere_depto.php" method="POST">
						<p> Nome do Departamento</p>
						<input type="text" name="depto"/> <br>
						<input type="submit"/>
					</form>
				</form>
			</div>

			<footer> </footer>
		</div>
	</body>
</html>

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

			require_once "include/slider.php"
			?>



			<div id="login">
				<div class="loginbox">
					<form action="validarlogin.php" method="POST">
						<p>Email</p>
					<input type="text" name="email" placeholder="Enter Email"/> <br/>
						<p>Password</p>
					<input type="password" name="senha" placeholder="Enter Password"/> <br/>
					<font size = 3>
					<a href = "cadastro.php">Cadastre-se aqui</a>
					<input type="submit" value="Login" />
				</form>

						<?php
						if($_SESSION['logado'] != true){
							if($_SESSION['erro'] == 1){
								echo "Usuário ou senha incorretos";
							}; };?>


				</div>
			</div>

			<footer> </footer>
		</div>
	</body>
</html>

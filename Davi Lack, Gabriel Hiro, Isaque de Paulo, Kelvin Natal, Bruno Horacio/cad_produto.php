<?php
	require_once "include/conexao.php";
	$conn = conexao();
	$sqldepto = mysqli_query($conn,"SELECT * FROM tbl_depto order by nome_depto");
	$sqlprod = mysqli_query($conn, "SELECT * FROM tbl_produto order by rand() limit 0,8");

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

			<br>

			<div id="cad_produto">
					<form action="insere_produto.php" method="POST">

						<p>Nome do produto</p>
						<input type="text" name="nome_produto" id="nome_produto" required/> </br>

						<p>Descrição do produto</p>
						<input type="text" name="desc_produto" id="desc_produto" required/> </br>

						<p>Preço do produto</p>
						<input type="text" name="preco_produto" id="preco_produto" required/> </br>

						<p>Imagem do produto</p>
						<input type="file" name="img_produto" id="img_produto" required/> </br>

						<p>Departamento</p>

						<select name="depto" required>
							<option value="">Selecione</option>
								<?php
									while ($rs = mysqli_fetch_array($sqldepto)){
								?>
									<option value="<?php echo $rs['id_depto']; ?>"><?php echo $rs['nome_depto']; ?></option>
								<?php
								}
								?>
						</select>
						<br/><input type="submit"><br/>
					</form>
				</form>

						<?php
						if($_SESSION['logado'] != true){
							if($_SESSION['erro'] == 1){
								echo "Usuário ou senha incorretos";
							}; };?>

			</div>

			<footer> </footer>
		</div>
	</body>
</html>

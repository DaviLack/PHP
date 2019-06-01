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
		$_SESSION['logado'] = 0;
	};

?>
<!doctype html>
<html lang="pt-br">
	<head>
		<title> Título </title>
		<link rel = "stylesheet" type ="text/css" href="css/style.css"/>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script src="js/funcoes.js"></script>
				<script type="text/javascript">
			function animar(){
				$("#carousel ul").animate({marginLeft:-1100, },1000,function(){
					$(this).find("li:last").after($(this).find("li:first"));
					$(this).css({marginLeft:0});
				})
			}
			$(document).ready(function(){
				// Set the interval to be 5 seconds
				var rodar = setInterval(animar,4000);
				$('#carousel ul').hover(function() {
					clearInterval(rodar);
				}, function() {
					rodar = setInterval(animar,4000);
				});
			});
		</script>
		<meta charset = "UTF-8"/>
		<script src="js/funcoes.js"></script>

	</head>
	<body>
		<div id="wrapper">

			<?php require_once "include/header.php";

			require_once "include/menu.php";
			require_once "include/slider.php"
			 ?>


			<?php
				while($rsprod = mysqli_fetch_array($sqlprod)){ ?>

				<div class="item">

				<p class = "nomeproduto"><?php echo "<br>" . $rsprod['nome_produto'] . "<br> <br>"; ?></p>
					  <img src="img/<?php echo $rsprod['img_produto']?>">

				<p class="preco"><?php echo "<br> R$ " . $rsprod['preco_produto'];?> </p>
				<a href="javascript:void();" onclick="javascript:adicionarprod(<?php echo $$rsprod['id_prod']; ?>,<?php echo $$rsprod['preco_prod']; ?>);" class="btn comprar">Comprar</a>
				</p>
				</div>

			<?php

			} ?>


			<footer> </footer>
		</div>
	</body>
</html>

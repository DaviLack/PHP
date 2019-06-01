<?php session_start();
if(!isset($_SESSION['erro']))
{
	$_SESSION['erro'] = 0;
};
if(!isset($_SESSION['logado']))
{
	$_SESSION['logado'] = 0;
};
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Form </title>
	</head>
<body>
	<form action="validar.php?acao=entrar" method="post">
		<input type="text" name="usuario" placeholder="Enter Username"/> <br/> 
		<input type="password" name="senha" placeholder="Enter Password"/> <br/>
		<input type="submit" value="Enviar">
	</form>
	
	<?php
		if($_SESSION['logado'] == false){
				if($_SESSION['erro'] == 1){
					echo "Usuário ou senha incorretos";
				};

			if($_SESSION['erro'] == 3){
				echo "Página restrita, faça login !";
			};
		}
		?>
</body>
</html>
<?php
     require_once "include/conexao.php";
	 $conn = conexao();
	 session_start();

     $email = $_POST['email'];	
	 $password = hash("sha512",md5($_POST['senha']));
	 
	 $sql = mysqli_query($conn,"SELECT * FROM pessoa WHERE email_pessoa = '$email' AND senha_pessoa = '$password'");
     
	 $n = mysqli_affected_rows($conn);
	
	$rsusuario = mysqli_fetch_array($sql);

	if($n == 1){
		$_SESSION['logado'] = true;
		$_SESSION['erro'] = 0;
		header("location:loja.php");
	}
	else{
		$_SESSION['logado'] = false;
		$_SESSION['erro'] = 1;
		header("location:corno.php");
	}
 ?>

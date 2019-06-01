<?php
     require_once "include/conexao.php";
	 $conn = conexao();
	 session_start();

     $username = $_POST['usuario'];	
	 $password = hash("sha512",md5($_POST['senha']));
	 $email = $_POST['email'];
	 
	 $sql2 = mysqli_query($conn,"SELECT * FROM pessoa WHERE email_pessoa = '$email'");
	 $nemail = mysqli_num_rows($sql2);
	 
	 $n = mysqli_affected_rows($conn);
	
   	 if($nemail == 1){
		$_session['erro'] = 7;
		header("location:cadastro.php");
	 }
	 else{
	 $sql = mysqli_query($conn, "INSERT INTO pessoa(nome_pessoa, email_pessoa, senha_pessoa) VALUES('$username', '$email', '$password')");
	
	 $n = mysqli_affected_rows($conn);
	 header("location:loja.php");
	 }

 ?>

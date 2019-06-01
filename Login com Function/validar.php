<?php
	session_start();
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$acao = $_GET['acao'];
	
	function login($usuario, $senha){
		if(($usuario == "joao") && ($senha == 123)){
			$_SESSION['logado'] = true;
			$_SESSION['nome'] = "João";
			$_SESSION['erro'] = 0;
			header('location:restrita.php');
		} 
		else{
			$_SESSION['logado'] = false;
			$_SESSION['nome'] = "";
			$_SESSION['erro'] = 1;
			header('location:Form.php');
		}
	}
	
	
	function sair(){
		session_start();
		$_SESSION['logado'] = false;
		session_destroy();
		header("location:Form.php");

	}
	
	
	
	switch($acao){
		case "entrar";
			login($usuario, $senha);
			break;
		case "sair";
			sair();
			break;
	}
	?>
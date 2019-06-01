<?php
	function soma(){
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$soma = $valor1 + $valor2;
	return $soma;
	}
	
	function sub(){
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$sub = $valor1 - $valor2;
	return $sub;
	}
	
	function mult(){
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$mult = $valor1 * $valor2;
	return $mult;
	}
	
	function div(){
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$div = $valor1 / $valor2;
	return $div;
	}
	
	echo "Soma: " . soma() . "<br/> Subtração: " . sub() . "<br/> Multiplicação: " . mult() . "<br/> Divisão: " . div();
?>
 <?php
	session_start();
	require_once "include/conexao.php";
	
	$conn = conexao();
	$idsessao = session_id();
	
	$id_prod = $_GET['id'];
	$preco_prod = $_GET['preco'];
	
	$sqlsessao = mysqli_query($conn,"SELECT * FROM carrinho WHERE id_sessao_carrinho = '$idsessao'");
	$conta_carrinho = mysqli_num_rows($sqlsessao);	
	
	if($conta_carrinho < 1){
		$sqlinsere = mysqli_query($conn,"INSERT INTO carrinho (id_sessao_carrinho) VALUES ('$idsessao')");
		
		$sqlcarrinho = mysqli_query($conn,"SELECT id_carrinho FROM carrinho WHERE id_sessao_carrinho = '$idsessao'");
		$id_carrinho = mysqli_fetch_array($sqlcarrinho);
		$id_carrinho = $id_carrinho['id_carrinho'];
		
		$sqlitens = mysqli_query($conn,"INSERT INTO itens_carrinho (id_carrinho, id_prod, qtd_prod, preco_prod) VALUES($id_carrinho,$id_prod,1,$preco_prod)");
		
		$conta_carrinho = mysqli_query($conn,"SELECT SUM(qtd_prod) as Total from itens_carrinho WHERE id_carrinho = $id_carrinho");
		
		$exibir = mysqli_fetch_array($conta_carrinho);
		$conta_carrinho= $exibir['Total'];
	}
	else{
		$sqlcarrinho = mysqli_query($conn,"SELECT id_carrinho FROM carrinho WHERE id_sessao_carrinho = '$idsessao'");
		$id_carrinho = mysqli_fetch_array($sqlcarrinho);
		$id_carrinho = $id_carrinho['id_carrinho'];
		
		
		$sql_prod_existe	= 	mysqli_query($conn,"SELECT * FROM itens_carrinho where id_prod = '$id_prod' AND id_carrinho = '$id_carrinho' ");
		$exec_sqlprod_existe =	mysqli_fetch_array($sql_prod_existe);
		$n= mysqli_num_rows($sql_prod_existe);
		
		if($n < 1){
			$sqlitens = mysqli_query($conn,"INSERT INTO itens_carrinho (id_carrinho, id_prod, qtd_prod, preco_prod) VALUES('$id_carrinho','$id_prod',1,'$preco_prod')");
		}
		else{
			$nova_qtd = $exec_sqlprod_existe['qtd_prod']+1;
			$sql_alterar = mysqli_query($conn,"UPDATE itens_carrinho SET qtd_prod = $nova_qtd WHERE  id_prod = $id_prod  AND id_carrinho = $id_carrinho ");
		}
		
		
		$conta_carrinho = mysqli_query($conn,"SELECT SUM(qtd_prod) as Total from itens_carrinho WHERE id_carrinho = $id_carrinho");
		$exibir = mysqli_fetch_array($conta_carrinho);
		$conta_carrinho= $exibir['Total'];
	}
?>
						<?php
							if($conta_carrinho > 0 ){
						?>
								<i class="fa fa-bell-o"></i>
								<span class="heartbit"></span>
								<span class="point">
									<div id="valor"><?php echo $conta_carrinho;?></div>
								</span> 
							<?php } ?>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
<!--[CDATA[
	$(document).ready(function(){
		$('#menu').click(function() {
			$('#nav').toggle('slow');
		});
	});
// ]]-->	
</script>
<?php
	require_once "include/conexao.php";
	
	$sqlbanda = mysqli_query($conn,"SELECT * FROM tbl_departamento");

	$idsessao = session_id();

	$sqlcarrinho= mysqli_query($conn,"SELECT * FROM carrinho WHERE id_sessao_carrinho = '$idsessao'");
	$rscarrinho = mysqli_fetch_array($sqlcarrinho);
	$id_carrinho = $rscarrinho['id_carrinho'];
	
	$sql_carrinho = mysqli_query($conn,"SELECT * FROM itens_carrinho WHERE id_carrinho = $id_carrinho");
	
	$conta_carrinho = mysqli_query($conn,"SELECT SUM(qtd_prod) as Total from itens_carrinho WHERE id_carrinho = $id_carrinho");
	$exibir = mysqli_fetch_array($conta_carrinho);
	$conta_carrinho= $exibir['Total'];

	if(!isset($_SESSION['logado'])){
		$_SESSION['logado']= false;
	}
?>
<header>
     <a href="Loja.php"><img src="include/icone.png" title="Pagina inicial"/></a>

     <?php
          if($_SESSION['logado'] == true){
               ?>
               <a href="logout.php">Logout</a>
               <a href="cad_depto.php">Cadastrar Departamento</a>
               <a href="cad_produto.php">Cadastrar Produto</a>
               <?php

          }

          else{
               ?> <a href="login.php">Login</a> <?php
          }

     ?>
	 <div id="kart_login">
					<div id="kart">
						<a href="resumo_carrinho.php">
							<img src="img/kart.png"/>

								<div id="notify"> 
									<?php
										if($conta_carrinho > 0){
									?>
										<i class="fa fa-bell-o"></i>
										<span class="heartbit"></span>
										<span class="point">
											<div id="valor"><?php echo $conta_carrinho; ?></div>
										</span> 
										<?php } ?>
								</div>

					</div>
</header>

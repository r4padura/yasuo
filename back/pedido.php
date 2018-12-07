<?php 
require_once "controlador.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Página de Pedido</title>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
</head>
<body>
	<header class="adminer">
		<div class="menu">
			<div class="menu-logo">
				<a href="../index.php">Yasuo Pizzaria</a>
			</div>
			<nav class="adminer">
				<div class="dropdown">
					<button onclick="document.getElementById('id01').style.display='block'"><?php echo $_SESSION['nome']; ?></button>
					<div class="dropdown-content">
						<a href="perfilUser.php">Perfil</a>
						<form action="controlador.php" method="get">
							<button type="submit" name="acao" value="logout">Sair</button>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div class="topo">
		<h1>Pedido</h1>
		<p>faça seu pedido conforme desejado</p>
	</div>
	
	<form action="controlador.php" method="post" class="form-pedido">
		<h2>Qual o tamanho da pizza? </h2> <!-- trazer do BD -->


           <?php 
                $selecao = '*';
                $tabela = 'tamanho';
                $result = buscar($conecta, $selecao, $tabela,null);

                if ($result) {

                    $tamanhos = mysqli_fetch_all($result);
                    
                    foreach ($tamanhos as $indice=>$tamanho) {  ?>

                    	<input type="radio" class="tamanho" name="tamanho" value="<?php echo $tamanho[0]; ?>" id="<?php echo $tamanho[1]; ?>"><label for="<?php echo $tamanho[1]; ?>"></label> <?php echo $tamanho[1]; ?><br>

                        <?php
                    }
                }
            ?>		

		<div class="sabor" >
		</div>

		<b>Borda recheada:</b><br>
		<input type="radio" name="borda" value="sim" id="sim"><label for="sim"></label> Sim<br>
		<input type="radio" name="borda" value="nao" id="nao"><label for="nao" ></label> Não<br>

		<div class="sabor-borda" style="display: none">
			<input type="radio" name="sabor_borda" value="catupiry" id= "sabor_borda-1"><?php.$id_borda ;?><label for= "catupiry">Catupiry</label><br>

			<input type="radio" name="sabor_borda" value="cheedar" id="sabor_borda-2"><label for="cheedar">Cheedar</label><br>
		</div>
	
	<!-- deixar tudo em um form -->
	
		<b>Forma de pagamento:</b><br>
		<input type="radio" name="pagamento" value="dinheiro" id= "dinheiro" ><label for="dinheiro">Dinheiro</label><br>
		<input type="radio" name="pagamento" value="cartao" id="cartao" ><label for="cartao">Cartão</label><br>
				
		<b>Tele-entrega:</b><br>
		<input type="radio" name="tele" value="sim">Sim<br>
		<input type="radio" name="tele" value="nao">Não<br>
		<button type="submit" name="acao" value="pedir" class="envia-pedido">Confirmar Pedido</button>
	</form>

	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script>
		$('input[name=borda]').click(function(){

			if($(this).val() == 'sim')
				$('.sabor-borda').show();
			else
				$('.sabor-borda').hide();
		});

		$('input[name=pagamento]').click(function(){

			if($(this).val() == 'dinheiro')
				$('.troco').show();
			else
				$('.troco').hide();
		});



		$('input[name=troco]').click(function(){

			if($(this).val() == 'sim')
				$('.valor').show();
			else
				$('.valor').hide();
		});

		$('.tamanho').click(function(){

			var tamanho=$(this).val();

			$.ajax({
				url : "teste.php",
				type : 'post',
				data : {tamanho : tamanho
					
				},
				beforeSend : function(conteudo){
					$(".sabor").html("ENVIANDO...");
				}
			})
			.done(function(msg){
				$(".sabor").html(msg);
			})
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			}); 

			//	if($(this).val() == 'sim')
				//	$('.valor').show();
				//else
				//	$('.valor').hide();
			});



		</script>
		
	</body>
	</html>
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
	
	<form action="envia_pedido.php" method="post" class="form-pedido">
		<h2>Qual o sabor da pizza? </h2>
		<select name="sabor">
			<option value="calabresa">Calabresa</option>
			<option value="frango">Frango</option>
			<option value="strogonoff">Strogonoff</option>
			<option value="mussarela">Mussarela</option>
			<option value="quatroqueijos">4 Queijos</option>
			<option value="sensacao">Sensação</option>
		</select>
		<h2>Qual o tamanho da pizza? </h2> <!-- trazer do BD -->
		<input type="radio" class="tamanho" name="tamanho" value="broto" id="broto"><label for="broto"></label> Broto<br>
		<input type="radio" class="tamanho" name="tamanho" value="media" id="media"><label for="media"></label> Média<br>
		<input type="radio" class="tamanho" name="tamanho" value="grande" id="grande"><label for="grande"></label> Grande<br>
		<input type="radio" class="tamanho" name="tamanho" value="familia" id="familia"><label for="familia"></label> Família<br>

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
		<b>Troco</b><br>
		<div class="troco" style="display: none">
			<input type="radio" name="troco" value="sim" id= "sim"> <label for= "sim">Sim</label><br>
				<b>Valor</b>
		<div class="valor" style= "display: none">
			<input type="text" name="valor" value= "valor" id= "valor"><label for= "valor">Valor</label>
		</div>
			<input type="radio" name="troco" value="nao" id="nao"><label for= "nao">Não</label><br>
		</div>
		
		<input type="radio" name="pagamento" value="cartao" id="cartao" ><label for="cartao">Cartão</label><br>
		<b>Tele-entrega:</b><br>
		<input type="radio" name="tele" value="sim">Sim<br>
		<input type="radio" name="tele" value="nao">Não<br>
		<input type="submit" name="envia_pedido" value="Confirmar Pedido" class="envia-pedido">
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
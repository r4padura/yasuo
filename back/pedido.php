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
                <a href="index.php">Yasuo Pizzaria</a>
            </div>
            <nav class="adminer">
                <div class="dropdown">
                    <button onclick="document.getElementById('id01').style.display='block'"><?php echo $_SESSION['nome']; ?></button>
                    <div class="dropdown-content">
                        <a href="#">Perfil</a>
                        <form action="controlador.php" method="get">
                            <button type="submit" name="acao" value="logout">Sair</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
	<form action="" method="post" class="">
		<h2>qual o tamanho da pizza? </h2>
		<input type="radio" name="tamanho" value="broto" id="broto"><label for="broto"></label> broto<br>
		<input type="radio" name="tamanho" value="media" id="media"><label for="media"></label> media<br>
		<input type="radio" name="tamanho" value="grande" id="grande"><label for="grande"></label> grande<br>
		<input type="radio" name="tamanho" value="familia" id="familia"><label for="familia"></label> familia<br>

		<div class="sabor" style="display: none">
			<input type="select" name="sabor" value="">

			borda recheada:<br>
			<input type="radio" name="borda" value="sim" id="sim"><label for="sim"></label> sim<br>
			<input type="radio" name="borda" value="nao" id="nao"><label for="nao" ></label> não<br>

			<div class="sabor-borda" style="display: none">
				<input type="radio" name="sabor_borda" value="catupiri" id= "sabor_borda-<?php.$id_borda; ?>"> <label for= "catupiri"></label><br>
				<input type="radio" name="sabor_borda" value="cheedar" id="sabor_borda-2"><label for= "cheedar">cheedar</label><br>
			</div>
		</form>

		<form action="" , method="post" class="">
			forma de pagamento:<br>
			<input type="radio" name="pagamento" value="dinheiro" id= "dinheiro" ><label for="dinheiro">dinheiro</label><br>
			<input type="radio" name="pagamento" value="cartao" id="cartao" ><label for="cartao">cartao</label><br>
				<div class="troco" style="display: none">
					<input type="radio" name="troco" value="sim" id= "sim"> <label for= "sim">sim</label><br>
					<input type="radio" name="troco" value="nao" id="nao"><label for= "nao">nao</label><br>
				</div>
						<div class="valor" style= "display: none">
							<input type="text" name="valor" value= "valor" id= "valor"><label for= "valor">valor</label>
						</div>

				<div class="">
					
				</div>		
			tele-entrega:<br>
			<input type="radio" name="tele" value="sim">sim<br>
			<input type="radio" name="tele" value="nao">nao<br>

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
					$('.sim').show();
				else
					$('.sim').hide();
			});



		$('input[name=troco]').click(function(){
				
				if($(this).val() == 'sim')
					$('.valor').show();
				else
					$('.valor').hide();
			});



		</script>
		
	</body>
	</html>
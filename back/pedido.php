<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" , method="post" class="">
		qual o tamanho da pizza: <br>
		<input type="radio" name="tamanho" value="broto" id="broto"><label for="broto"></label> broto<br>
		<input type="radio" name="tamanho" value="media" id="media"><label for="media"></label> media<br>
		<input type="radio" name="tamanho" value="grande" id="grande"><label for="grande"></label> grande<br>
		<input type="radio" name="tamanho" value="familia" id="familia"><label for="familia"></label> familia<br>


		<div class="sabor" style="display: none">
			<input type="select" name="sabor" value=>

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
		<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
		<script>
			$('input[name=borda]').click(function(){

				if($(this).val() == 'sim')
					$('.sabor-borda').show();
				else
					$('.sabor-borda').hide();
			});
		</script>
	</body>
	</html>
<?php 
				$selecao = '*';
				$tabela = 'sabor';
				$where = 'status = "n"';
				$result = buscar($conecta, $selecao, $tabela, $where);

				if ($result) {

					$sabores = mysqli_fetch_all($result);
					
					foreach ($sabores as $sabor) {  ?>
						<div class="cardapio-itens">
							<h3 class="grid-3"><?php echo $sabor; ?></h3>
							<p class="grid-6"><?php echo $sabor;?> </p>
						</div><?php
					}
				}
			?>
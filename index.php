<?php
require_once("back/conecta.php");
require_once("back/controlador.php");

if (isset($_SESSION['login'])) {
	?>
	<!doctype html>
	<html lang="pt_br">
	<head>  
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<title>Yasuo Pizzaria - Home</title>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css" /> 
		<link rel="stylesheet" href="assets/css/grid.css" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<meta property="og:title" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="">
		<meta name="twitter:creator" content="@">
		<meta name="twitter:title" content ="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="">

		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery.mask.js"></script>
		<script src="assets/js/scripts.js"></script>

	</head> 
	<body>
		<header class="menu-bg">
			<div class="hero-image">
				<div class="menu">
					<div class="menu-logo">
						<a href="index.php">Yasuo Pizzaria</a>
					</div>
					<nav class="menu-nav">
						<a href="back/pedido.php">Pedido</a>  
						<a href="back/perfilUser.php">Perfil</a>
						<a href="back/logout.php">SAIR</a>
					</nav>
				</div>
				<div class="hero-text">
					<h1>Yasuo Pizzaria</h1>
					<h3>Confira nosso cardápio e faça seu pedido!</h3>
					<a href="#cardapio">Ver cardápio</a>
				</div>
			</div>
		</header>

		<section id="cardapio">
			<div class="cardapio-bg">
				<h1>Cardápio</h1>
				<p>escolha entre os mais variados sabores</p>
			</div>
			
			<?php 
			$selecao = '*';
			$tabela = 'sabor';
			$where = 'status = "n"';
			$result = buscar($conecta, $selecao, $tabela, $where);

			if ($result) {

				$sabores = mysqli_fetch_all($result);

				foreach ($sabores as $indice=>$sabor) {  ?>
					<div class="cardapio-itens">
						<h3 class="grid-3"><?php 
						echo $sabor[3]; ?></h3>
						<p class="grid-6"><?php echo $sabor[1];?> </p>
						</div><?php
					}
				}
				?>
				<div class="pedido-but">
					<a href="back/pedido.php" class="botao-pedido">Fazer pedido</a>
				</div> 

	</section>

	<section id="footer">
		<div class="footer-bg">
			<h1>Contato</h1>
			<p>encontre-nos nas redes sociais</p>
			<div class="media-social">	
							<div class="social-media">
								<a href="https://www.facebook.com/yasuopizzaria" target="_blank"><i class="fab fa-facebook-f"></i>
									<span>/yasuopizzaria</span></a>
								</div>
								<div class="social-media">
									<a href="https://www.instagram.com/yasuopizzaria" target="_blank"><i class="fab fa-instagram"></i>
										<span>/yasuopizzaria</span></a>
									</div>
									<div class="social-media">
										<a href="tel:00999999999"><i class="fab fa-whatsapp"></i>
											<span>(00) 9 9999-9999</span></a>
										</div>
									</div>
								</div>
	</section>

				<script>
					$('.hero-text a[href^="#"]').on('click', function(e) {
						e.preventDefault();
						var id = $(this).attr('href'),
						targetOffset = $(id).offset().top;

						$('html, body').animate({ 
							scrollTop: targetOffset - 100
						}, 1200);
					});
				</script>
			</body>  
			</html>  
			<?php 
		}
		else {
			?>
			<!doctype html>
			<html lang="pt_br">
			<head>  
				<meta charset="UTF-8">
				<meta http-equiv="x-ua-compatible" content="ie=edge">
				<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
				<title>Yasuo Pizzaria - Home</title>
				<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
				<link rel="stylesheet" href="assets/css/grid.css" type="text/css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

				<meta property="og:title" content="" />
				<meta property="og:type" content="website" />
				<meta property="og:description" content="" />
				<meta property="og:url" content="" />
				<meta property="og:image" content="" />

				<meta name="twitter:card" content="summary_large_image">
				<meta name="twitter:site" content="">
				<meta name="twitter:creator" content="@">
				<meta name="twitter:title" content ="">
				<meta name="twitter:description" content="">
				<meta name="twitter:image" content="">

				<script src="assets/js/jquery-3.3.1.min.js"></script>
				<script src="assets/js/jquery.mask.js"></script>
				<script src="assets/js/scripts.js"></script>
			</head> 
			<body>
				<header class="menu-bg">
					<div class="hero-image">
						<div class="menu">
							<div class="menu-logo">
								<a href="index.php">Yasuo Pizzaria</a>
							</div>
							<nav class="menu-nav">
								<button onclick="document.getElementById('id01').style.display='block'" >LOGIN</button>
								<button onclick="document.getElementById('id02').style.display='block'" >CADASTRO</button>
							</nav>
						</div>
						<div class="hero-text">
							<h1>Yasuo Pizzaria</h1>
							<h3>Confira nosso cardápio e faça seu pedido!</h3>
							<a href="#cardapio">Ver cardápio</a>
						</div>
					</div>
					<!-- Modal Login -->
					<div id="id01" class="modal">

						<form class="modal-content animate" action="back/controlador.php" method="post">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Fechar">&times;</span>
							</div>

							<div class="modal-container">
								<label for="email"><b>E-mail</b></label>
								<input type="email" placeholder="E-mail" name="email" required>

								<label for="senha"><b>Senha</b></label>
								<input type="password" placeholder="Senha" name="senha" required>
								<center>
									<button type="submit" name="acao" value="login">LOGIN</button>
								</center>
							</div>
						</form>
					</div>
					<!-- Modal Cadastro -->
					<div id="id02" class="modal">
						<form class="modal-content animate" action="back/controlador.php" method="post">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Fechar">&times;</span>
							</div>
							<div class="modal-container">
								<center>
									<h2>Cadastro</h2>
								</center>
								<label for="name"><b>Nome</b></label>
								<input type="text" placeholder="Digite seu nome completo" name="nome" required>

								<label for="endereco"><b>Endereço</b></label>
								<input type="text" placeholder="Digite seu endereço" name="endereco" required>

								<label for="telefone"><b>Telefone</b></label>
								<input type="text" placeholder="Digite seu número de telefone" name="telefone" required>

								<label for="email"><b>E-mail</b></label>
								<input type="email" placeholder="Digite seu melhor E-mail" name="email" required>

								<label for="senha"><b>Senha</b></label>
								<input type="password" placeholder="Digite uma senha" name="senha" required>
								<center>
									<button type="submit" name="acao" value="cadastro_cliente">CADASTRAR</button>
								</center>
							</div>
						</form>
					</div>
				</header>

				<section id="cardapio">
					<div class="cardapio-bg">
						<h1>Cardápio</h1>
						<p>escolha entre os mais variados sabores</p>
					</div>

					<?php 
					$selecao = '*';
					$tabela = 'sabor';
					$where = 'status = "n"';
					$result = buscar($conecta, $selecao, $tabela, $where);

					if ($result) {

						$sabores = mysqli_fetch_all($result);

						foreach ($sabores as $indice=>$sabor) {  ?>
							<div class="cardapio-itens">
								<h3 class="grid-3"><?php echo $sabor[3]; ?></h3>
								<p class="grid-6"><?php echo $sabor[1];?> </p>
							</div> 
							<?php
						}
					}
					?>

					<a href="#" class="botao-pedido">Fazer pedido</a>

				</section>

				<section id="footer">
					<div class="footer-bg">
						<h1>Contato</h1>
						<p>encontre-nos nas redes sociais</p>
						<div class="media-social">	
							<div class="social-media">
								<a href="https://www.facebook.com/yasuopizzaria" target="_blank"><i class="fab fa-facebook-f"></i>
									<span>/yasuopizzaria</span></a>
								</div>
								<div class="social-media">
									<a href="https://www.instagram.com/yasuopizzaria" target="_blank"><i class="fab fa-instagram"></i>
										<span>/yasuopizzaria</span></a>
									</div>
									<div class="social-media">
										<a href="tel:00999999999"><i class="fab fa-whatsapp"></i>
											<span>(00) 9 9999-9999</span></a>
										</div>
									</div>
								</div>
				</section>
				<script>
					$('.hero-text a[href^="#"]').on('click', function(e) {
						e.preventDefault();
						var id = $(this).attr('href'),
						targetOffset = $(id).offset().top;

						$('html, body').animate({ 
							scrollTop: targetOffset - 100
						}, 1200);
					});
				</script>

				<script>
	                // Abrir modal de Login
	                var modalLogin = document.getElementById('id01');

	                // Fechar o modal quando clicar fora
	                window.onclick = function(event) {
	                	if (event.target == modalLogin) {
	                		modalLogin.style.display = "none";
	                	}
	                }
            	</script>

            	<script>
	                // Abrir modal de Cadastro
	                var modalCadastro = document.getElementById('id02');

	                // Fechar o modal quando clicar fora
	                window.onclick = function(event) {
	                	if (event.target == modalCadastro) {
	                		modalCadastro.style.display = "none";
	                	}
	                }
           	 </script>

	</body> 
 	</html> 

<?php
	}
?>
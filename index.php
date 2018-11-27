<?php
require_once("back/conecta.php");
session_start();
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

			<div id="id01" class="modal">

				<form class="modal-content animate" action="back/controlador.php" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					</div>

					<div class="container">
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
			<script>
                // Abrir modal
                var modal = document.getElementById('id01');

                // Fechar o modal quando clicar fora
                window.onclick = function(event) {
                	if (event.target == modal) {
                		modal.style.display = "none";
                	}
                }
            </script>

            <div id="id02" class="modal">

            	<form class="modal-content animate" action="back/controlador.php" method="post">
            		<div class="imgcontainer">
            			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            		</div>

            		<div class="container">
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
            <script>
                // Abrir modal
                var modal = document.getElementById('id02');

                // Fechar o modal quando clicar fora
                window.onclick = function(event) {
                	if (event.target == modal) {
                		modal.style.display = "none";
                	}
                }
            </script>
        </header>
        <section id="cardapio">
        	<div class="cardapio-bg">
        		<h1>Cardapio</h1>
        		<p>Veja nosso cardapio</p>

        		<ul>
        			<li>Pizza 1</li>
        			<li>Pizza 2</li>
        			<li>Pizza 3</li>
        			<li>Pizza 4</li>
        		</ul>
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

			<div id="id01" class="modal">

				<form class="modal-content animate" action="back/controlador.php" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					</div>

					<div class="container">
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
			<script>
                // Abrir modal
                var modal = document.getElementById('id01');

                // Fechar o modal quando clicar fora
                window.onclick = function(event) {
                	if (event.target == modal) {
                		modal.style.display = "none";
                	}
                }
            </script>

            <div id="id02" class="modal">

            	<form class="modal-content animate" action="back/controlador.php" method="post">
            		<div class="imgcontainer">
            			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            		</div>

            		<div class="container">
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
            <script>
                // Abrir modal
                var modal = document.getElementById('id02');

                // Fechar o modal quando clicar fora
                window.onclick = function(event) {
                	if (event.target == modal) {
                		modal.style.display = "none";
                	}
                }
            </script>
        </header>
        <section id="cardapio">
        	<div class="cardapio-bg">
        		<h1>Cardapio</h1>
        		<p>Veja nosso cardapio</p>

        		<ul>
        			<li>Pizza 1</li>
        			<li>Pizza 2</li>
        			<li>Pizza 3</li>
        			<li>Pizza 4</li>
        		</ul>
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
?>
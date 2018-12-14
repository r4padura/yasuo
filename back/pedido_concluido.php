<?php 
require_once "controlador.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pedido enviado</title>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="assets/css/grid.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
		<div class="footer-bg-pedido">
			<img src="../assets/img/ok.png">
			<h1>Pedido concluído com sucesso</h1>
		</div>
	</div>
<?php 
require_once "controlador.php";

$id = $_SESSION['id'];
$where = "idcliente =" . $id;

$selecao = "*";
$tabela = "cliente";
$result = buscar($conecta, $selecao, $tabela, $where);


if($result != NULL){

	$nome = $result['nome'];
	$email = $result['email'];
	$senha = $result['senha'];
	$endereco = $result['endereco'];
	$telefone = $result['telefone'];
	
}

// print_r($result);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Perfil</title>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<div class="card">
		<img src="../assets/img/user1.png" style="width:100%">
		<form action="controlador.php" method="post">
			<label for="nome"><b>Nome</b></label>
			<input type="text" name="nome" id="nome" value="<?=$nome?>">

			<label for="endereco"><b>Endereço</b></label>
			<input type="text" placeholder="Digite seu endereço" name="endereco" value="<?php echo $endereco; ?>">

			<label for="telefone"><b>Telefone</b></label>
			<input type="text" placeholder="Digite seu número de telefone" name="telefone" value="<?=$telefone?>">

			<label for="email"><b>E-mail</b></label>
			<input type="email" placeholder="Digite seu melhor E-mail" name="email" value="<?=$email?>">

			<label for="senha"><b>Senha</b></label>
			<input type="password" placeholder="Digite uma senha" name="senha">
			<center>
				<button type="submit" name="acao" value="editar">Concluir Edições</button>
			</center>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			
		</form>
	</div>

</body>
</html>
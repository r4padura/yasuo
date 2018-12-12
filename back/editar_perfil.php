<?php 
require_once "controlador.php";

$id=$_GET['id'];
$selecao = "*";
$tabela = "cliente";
$where = "idcliente = $id";
$result = buscar($conecta,$selecao, $tabela, $where);

if(mysqli_num_rows($result) > 0){
	$resultado = mysqli_fetch_array($result);
	
	$nome = $resultado['nome'];
	$email = $resultado['email'];
	$senha = $resultado['senha'];
	$endereco = $resultado['endereco'];
	$telefone = $resultado['telefone'];	
}

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

		
		<form action="controlador.php" method="post" enctype="multipart/form-data">
			<label for="name"><b>Nome</b></label>
			<input type="text" placeholder="Digite seu nome completo" name="nome" value="<?=$nome?>">

			<label for="endereco"><b>Endereço</b></label>
			<input type="text" placeholder="Digite seu endereço" name="endereco" value="<?=$endereco?>">

			<label for="telefone"><b>Telefone</b></label>
			<input type="text" placeholder="Digite seu número de telefone" name="telefone" value="<?=$telefone?>">

			<label for="email"><b>E-mail</b></label>
			<input type="email" placeholder="Digite seu melhor E-mail" name="email" value="<?=$email?>">

			<label for="senha"><b>Senha</b></label>
			<input type="password" placeholder="Digite uma senha" name="senha" value="<?=$senha?>">

			<input type="hidden" name ="MAX_FILE_SIZE" value="200000">

			<label for="text"><b>Carregar Foto:</b></label><br>
			<input type="file" name="foto">
								
			<input type="hidden" name="id" value="<?=$id?>">
			<button type="submit" name="acao" value="editar">Concluir Edições</button>
		</form>
	</div>

</body>
</html>
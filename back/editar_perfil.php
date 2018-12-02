<?php 
require_once "controlador.php";

$id=$_SESSION['id'];
$result = update($id, $tabela, $set, $conecta);

if(mysqli_num_rows($result) > 0){
	$resultado = mysqli_fetch_array($result);
	
	$nome = $resultado['nome'];
	$email = $resultado['email'];
	$senha = $resultado['senha'];
	
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
		<img src="../assets/img/user1.png" style="width:100%">
		<form action="controlador.php" method="post">
			<input type="text" name="nome" id="nome" value="<?=$nome?>">
			<p><?php echo $_SESSION['endereco']; ?></p>
			<p><?php echo $_SESSION['telefone']; ?></p>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<button type="submit" name="acao" value="editar">Concluir Edições</button>
		</form>
	</div>

</body>
</html>
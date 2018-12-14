<?php 
require_once "controlador.php";

if (isset($_GET['id']))
{


	$id=$_GET['id'];

}
else
{

	$id=$_SESSION['id'];

}
	$selecao = "*";
	$tabela = "cliente";
	$where = "idcliente = $id";
	$result = buscar($conecta,$selecao, $tabela, $where);

if(mysqli_num_rows($result) > 0){
	$resultado = mysqli_fetch_array($result);
	
	$nome = $resultado['nome'];
	$email = $resultado['email'];
	$endereco = $resultado['endereco'];
	$telefone = $resultado['telefone'];
	$nome_arquivo = $resultado['foto'];	
	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil do Cliente</title>
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
		<img src="../assets/img/<?=$nome_arquivo?>" style="width:100%">
		<h1><?php echo $nome;?></h1>
		<p><b>Endereço: </b><?php echo $endereco; ?></p>
		<p><b>Telefone: </b><?php echo $telefone; ?></p>
				
		<a href="editar_perfil.php?id=<?php echo $id; ?>"><button>Editar Perfil</button></a>
		
	</div>

</body>
</html>
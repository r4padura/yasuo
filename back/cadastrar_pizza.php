<?php
require_once "controlador.php";
?>

<!doctype html>
<html lang="pt_br">
<head>  
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Cadastro de Pizza</title>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css"> 

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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<header class="adminer">
        <div class="menu">
            <div class="menu-logo">
                <a href="../index.php">Yasuo Pizzaria</a>
            </div>
            <nav class="adminer">
                <div class="dropdown">
                    <button onclick="document.getElementById('id01').style.display='block'"><?php echo $_SESSION['nome'] ?></button>
                    <div class="dropdown-content">
                        <form action="controlador.php" method="get">
                        	<a href="../admin.php">Painel</a>
                            <button type="submit" name="acao" value="logout">Sair</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>


	<div class="cad-pizza">
		<h1>Cadastro de pizza</h1>
	</div>

	<div class="form-cad-pizza">
		<form action="controlador.php">
			<div class="cad-pizzabg">
				<label for="nomeSabor"><b>Sabor da pizza:</b></label>
				<input type="text" name="nomeSabor" id="" value="">

				<label for="ingredientes"><b>Ingredientes:</b></label>
				<textarea name="ingredientes" id="" value=""></textarea>

				<button type="submit">Cadastrar Pizza</button>
			</div>
		</form> 

	</div>
</body>
</html>
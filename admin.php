<?php

require_once "back/controlador.php";

/*if ($_SESSION['tipo'] != 1) {
    header('Location: index.html');

    exit();
}*/
?>
<!doctype html>
<html lang="pt_br">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Página do Administrador</title>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#options" ).accordion({collapsible: true, autoHeight: false, active: false});
        } );
    </script>
</head>
<body>
    <header class="adminer">
        <div class="menu">
            <div class="menu-logo">
                <a href="index.php">Yasuo Pizzaria</a>
            </div>
            <nav class="adminer">
                <div class="dropdown">
                    <button onclick="document.getElementById('id01').style.display='block'">ADMIN</button>
                    <div class="dropdown-content">
                        <a href="#">Perfil</a>
                        <form action="back/controlador.php" method="get">
                            <button type="submit" name="acao" value="logout">Sair</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- printar nome do admin logado <div class="name-user">

    </div>-->
    <div id="options">
        <button class="ver-pedido">Pedidos</button>
        <div>
            <p>Pedido 1</p>
            <p>Pedido 2</p>
            <p>Pedido 3</p>
        </div>
        <button class="cadastro-sabor">Cadastrar pizza</button>
        <div>
            <a href="#">Adicionar novo sabor de pizza</a>
        </div>
        <button class="ver-usuario">Usuários</button>
        <div>
            <p><?php echo "User 1: ".$_SESSION['email']; ?></p>
            <p>Usuario 2</p>
            <p>Usuario 3</p>
            <p>Usuario 4</p>
            <p>Usuario 5</p>
        </div>
    </div>
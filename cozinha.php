<?php
require_once "back/controlador.php";

if ($_SESSION['tipo'] != 1) {
    header('Location: index.php');
    exit();
}

$idpedido=$_GET['idpedido'];
?>
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Detalhes do Pedido</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"> 

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
                    <button onclick="document.getElementById('id01').style.display='block'"><?php echo $_SESSION['nome'] ?></button>
                    <div class="dropdown-content">
                        <form action="back/controlador.php" method="get">
                            <button type="submit" name="acao" value="logout">Sair</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="lista-pedidos-coz">
        <table>
          <tr>
            <th>ID</th>
            <th>Sabor(es)</th>
            <th>Tamanho</th>
            <th>Ingredientes</th>
        </tr>
        <?php 
        $sql = "SELECT pedido.idpedido, sabor.nome, tamanho.descricao, sabor.ingredientes from pedido, pedido_produto, tamanho, pizza, sabor where pedido.idpedido=pedido_produto.idpedido and pedido_produto.idpedido_produto=pizza.pedido_produto_idpedido_produto and pedido_produto.tamanho_idtamanho=tamanho.idtamanho and sabor.idsabor=pizza.sabor_idsabor and pedido.idpedido='$idpedido' ";
        $result = mysqli_query($conecta,$sql);


        if ($result) {

            $pedidos = mysqli_fetch_all($result);

            foreach ($pedidos as $indice=>$pedido) {  ?>
                <tr>
                    <td><?php echo $pedido[0]; ?></td>
                    <td><?php echo $pedido[1]; ?></td>
                    <td><?php echo $pedido[2]; ?></td>
                    <td><?php echo $pedido[3]; ?></td>                 
                    </tr><?php
                }
            }
            ?>
        </table>
            <a href="back/controlador.php?acao=concluir&id=<?php echo $pedido[0]; ?>"><button>Concluir Pedido</button></a>
    </div> 

    <!-- <td><a href="back/perfilUser.php?id='<?php// echo $cliente[0]; ?>'" target="_blank"><button class="button-painel">Ver Perfil</button></a></td>
    <td><a href="back/controlador.php?acao=exclui_usuario&id=<?php// echo $cliente[0]; ?>"><button class="button-painel-exclui">Excluir Usuário</button></a></td> -->
    <!-- botao de conclusao de PEDIDO -->
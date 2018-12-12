<?php
require_once "back/controlador.php";

if ($_SESSION['tipo'] != 1) {
    header('Location: index.php');
    exit();
}
require_once "cabecalho.php";
$idpedido=$_GET['idpedido'];
?>
<title>Cozinha</title>
        <table>
          <tr>
            <th>ID</th>
            <th>Nome</th>
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

    </div>
    <!-- <td><a href="back/perfilUser.php?id='<?php// echo $cliente[0]; ?>'" target="_blank"><button class="button-painel">Ver Perfil</button></a></td>
    <td><a href="back/controlador.php?acao=exclui_usuario&id=<?php// echo $cliente[0]; ?>"><button class="button-painel-exclui">Excluir Usuário</button></a></td> -->
    <!-- botao de conclusao de PEDIDO -->
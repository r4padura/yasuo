<?php
require_once "back/controlador.php";

if ($_SESSION['tipo'] != 1) {
    header('Location: index.php');
    exit();
}
require_once "cabecalho.php";
?>
    <div id="options">
        <button class="ver-pedido">Pedidos</button>
        <div class="lista-pedidos">
            <table>
              <tr>
                <th>ID</th>
                <th>Data/Hora</th>
                <th>Forma de Pagamento</th>
                <th>Entrega</th>
                <th>ID do Cliente</th>
                <th>Status</th>
            </tr>
            <?php 
            $selecao = '*';
            $tabela = 'pedido';
            $id = $_SESSION['id'];
            $result = buscar($conecta, $selecao, $tabela, null);

            if ($result) {

                $pedidos = mysqli_fetch_all($result);

                foreach ($pedidos as $indice=>$pedido) {  ?>
                    <div class="lista-pedidos">
                    <tr>
                        <td><?php echo $pedido[0]; ?></td>
                        <td><?php echo $pedido[1]; ?></td>
                        <td><?php echo $pedido[2]; ?></td>
                        <td><?php echo $pedido[3]; ?></td>
                        <td><?php echo $pedido[4]; ?></td>
                        <td><?php echo $pedido[5]; ?></td>
                        <td><?php echo $pedido[6]; ?></td>
                        <td><a href="cozinha.php?acao=cozinha&idpedido=<?php echo $pedido[0]; ?>" target="_blank"><button class="button-painel-pedido">Detalhes do Pedido</button></a>
                    </tr></div><?php
                    }
                } 
                ?>
        </table>

    </div>
    <button class="cadastro-sabor">Cadastrar pizza</button>
    <div class="add-sabor">
        <a href="back/cadastrar_pizza.php">Adicionar novo sabor de pizza</a>
    </div>
    <button class="ver-usuario">Usuários</button>
    <div>
        
        <div class="lista-pedidos">
            <table>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Ação</th>
            </tr>
            <?php 
                $selecao = '*';
                $tabela = 'cliente';
                $id = $_SESSION['id'];
                $result = buscar($conecta, $selecao, $tabela,null);

                if ($result) {

                    $clientes = mysqli_fetch_all($result);
                    
                    foreach ($clientes as $indice=>$cliente) {  ?>
                        <tr>
                            <td><?php echo $cliente[0]; ?></td>
                            <td><?php echo $cliente[1]; ?></td>
                            <td><?php echo $cliente[2]; ?></td>
                            <td><?php echo $cliente[3]; ?></td>

                            <td><?php echo $cliente[6]; ?></td>
                            <td><a href="back/perfilUser.php?id='<?php echo $cliente[0]; ?>'" target="_blank"><button class="button-painel">Ver Perfil</button></a></td>
                            <td><a href="back/controlador.php?acao=exclui_usuario&id='<?php echo $cliente[0]; ?>'"><button class="button-painel-exclui">Excluir Usuário</button></a></td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </table>

    </div>

    </div>
</div>
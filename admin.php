<?php
require_once "back/controlador.php";

if ($_SESSION['tipo'] != 1) {
    header('Location: index.php');
    exit();
}
require_once "cabecalho.php";
?>

    <!-- printar nome do admin logado <div class="name-user">

    </div>-->

    <div id="options">
        <button class="ver-pedido">Pedidos</button>
        <div class="lista-pedidos">
            <table>
              <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Valor</th>
                <th>Forma de Pagamento</th>
                <th>Entrega</th>
                <th>Cliente</th>
            </tr>
            <tr>
                <td>1</td>
                <td>20/10/2018</td>
                <td>19:00</td>
                <td>R$ 20,00</td>
                <td>Cartão</td>
                <td>Sim</td>
                <td>Alistar</td>
            </tr>
            <tr>
                <td>2</td>
                <td>21/10/2018</td>
                <td>19:30</td>
                <td>R$ 10,00</td>
                <td>Dinheiro</td>
                <td>Sim</td>
                <td>Miss Fortune</td>
            </tr>
            <tr>
                <td>3</td>
                <td>22/10/2018</td>
                <td>21:00</td>
                <td>R$ 12,00</td>
                <td>Cartão</td>
                <td>Não</td>
                <td>Jinx</td>
            </tr>
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
                            <td><a href="back/controlador.php?acao=exclui_usuario&id=<?php echo $cliente[0]; ?>"><button class="button-painel-exclui">Excluir Usuário</button></a></td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </table>

    </div>

    </div>
</div>
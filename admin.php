<?php
require_once "back/controlador.php";

if ($_SESSION['tipo'] != 1) {
    header('Location: ../index.php');
    exit();
}
require_once "cabecalho.php";
?>

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
            <p><?php 
                echo 'Nome: ' , $_SESSION['nome'], ' - Tipo: ', $_SESSION['tipo'];
             ?></p>
            
        </div>
    </div>
<?php
require_once('conecta.php');
require_once('func.php');
session_start();
$id=$_SESSION['id'];
$result = editar($id,$conecta);
if(mysqli_num_rows($result)>0){
$resultado = mysqli_fetch_array($result);

$nome = $resultado['nome'];
$enderco =$resultado['endereco'];
$telefone =$resultado['telefone'];
$email = $resultado['email'];
$senha = $resultado['senha'];
}
?>
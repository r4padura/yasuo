<?php
require_once("conecta.php");
require_once("func.php");

if(isset($_POST['acao']) && ($_POST['acao']=="cadastro_cliente")){

$nome=$_POST["nome"];
$endereco=$_POST["endereco"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$tabela="cliente";
$insert="nome, endereco, telefone, email, email, senha, tipo";
$values= "$nome, $endereco, $telefone, $email, $senha, 0")
$result=cadastro($conecta,$tabela,$insert,$values);
if($result)
	echo "cadastrado";
else
	echo "erro";


//-------------------------------------------------------------------------------------------------------------------------------------

if(isset($_POST['acao']) && ($_POST['acao']=="cadastro_pizza")){
$status=$_POST["status"];
$nome=$_POST["nome"];
$tabela="sabor";
$insert="ingredientes, status, nome";


	if($status = "b"){
		$ingredientes= "borda";
		$values = "$ingredientes, $status, $nome";
		$result=cadastro($conecta,$tabela,$insert,$values);

	}
	else{
	$ingredientes= $_POST["ingredientes"];
		$values = "$ingredientes, $status, $nome";
		$result=cadastro($conecta,$tabela,$insert,$values);
	
	}
if($result)
	echo "cadastrado";
else
	echo "erro";


//------------------------------------------------------cadastros----------------------------------------------------------------------

session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
$selecao = "*"
$tabela = "cliente"
$where = "email = $email and senha= $senha"
$result=buscar($conecta,$selecao, $tabela, $where);

if(mysqli_num_rows($result)>0){


	$resultado=mysqli_fetch_array($result);
	$_SESSION['login']=true;
	$_SESSION['id']=$resultado['id'];
	
	header ('location: perfil.php');
}else{
	header('location: index.html');
}





































?>

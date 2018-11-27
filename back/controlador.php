<?php
require_once("conecta.php");
require_once("func.php");
session_start();

if(isset($_POST['acao']) && ($_POST['acao']=="cadastro_cliente")){

$nome=$_POST["nome"];
$endereco=$_POST["endereco"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$tabela="cliente";
$insert="nome, telefone, email, senha, tipo, endereco";
$values= "'$nome', '$telefone', '$email', '$senha', 0, '$endereco'";
$result = cadastro($conecta,$tabela,$insert,$values);
if($result)
	header('Location: ../index.html');
else
	echo "erro de cadastro";
}

//-----------------------------------Cadastro_clientes------------------------------------------------------------------------------------

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
if($result) {
	header('Location: ../index.php');
}
else
	echo "erro";
}

//------------------------------------------------------cadastros_pizzas----------------------------------------------------------------------
if(isset($_POST['acao']) && ($_POST['acao']=="login")){
/*$nome = $_POST['nome'];*/

$email = $_POST['email'];
$senha = $_POST['senha'];
$selecao = '*';
$tabela = 'cliente';
$where = "email = '$email' and senha= '$senha'";
$result=buscar($conecta,$selecao, $tabela, $where);

	if(mysqli_num_rows($result)>0){

		$resultado=mysqli_fetch_array($result);

		$_SESSION['login']=true;
		$_SESSION['id']=$resultado['id'];
		if ($resultado['tipo'] == 1) {
			header('Location: ../admin.php');
		}
		else {
			header('Location: ../index.php');
		}

		
	
	}
}

//-------------------------------------------------login------------------------------------------------------------------------------
if(isset($_POST['acao']) && ($_POST['acao']=="editar")){

$id=$_SESSION['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$tabela="cliente";
$insert="nome, telefone, email, senha, tipo";
$values= "$nome, $telefone, $email, $senha, 0";
$where = 'id = $id';
$result = update($conecta,$tabela,$insert,$values);

if($result){
	$result = update($conecta,$endereco,$where);
	if($result)
		echo "editado com sucesso";


}else {
		echo "erro";
	}
}

/*-------------------*/

if (isset($_GET['acao']) && ($_GET['acao']=="logout")) {
	logout();
	unset($id);
}

/*---------logout */

?>
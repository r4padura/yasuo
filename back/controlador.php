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
if($result) {
	include "email.php";
	header('Location: ../index.php');
}
else
	echo "erro de cadastro";
}

//-----------------------------------Cadastro_clientes------------------------------------------------------------------------------------

if(isset($_POST['acao']) && ($_POST['acao']=="cadastro_pizza")){
$status=$_POST['status'];
$nome=$_POST['nome'];
$tabela="sabor";
$insert="ingredientes, status, nome";


	if($status === "b"){
		$descricao= "borda";
		$values = "'$descricao', '$status', '$nome'";
		$result=cadastro($conecta,$tabela,$insert,$values);

	}
	else{
		$descricao= $_POST["descricao"];
		$values = "'$descricao', '$status', '$nome'";
		$result=cadastro($conecta,$tabela,$insert,$values);
	
	}

if($result) {
	header('Location: ../admin.php');
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
		$_SESSION['id']=$resultado['idcliente'];
		$_SESSION['tipo'] = $resultado['tipo'];
		$_SESSION['nome'] = $resultado['nome'];
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['telefone'] = $resultado['telefone'];
		$_SESSION['endereco'] = $resultado['endereco'];
		$_SESSION['foto'] = $resultado['foto'];

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

$nome_arquivo=$_FILES['foto']['name'];  
$tamanho_arquivo=$_FILES['foto']['size'];
$arquivo_temporario=$_FILES['foto']['tmp_name'];

$id=$_SESSION['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$tabela="cliente";
$set ="nome = $nome , telefone = $telefone, email = $email, senha = $senha";



if (!empty($nome_arquivo)) {
	if (move_uploaded_file($arquivo_temporario, "../assets/img/$nome_arquivo")) {
		echo "Foto carregada com sucesso!";
		$tabela = "cliente";
		$set = "foto = '$foto'";
		
		$result2 = update($id,$tabela,$set,$conecta);
	}
}


$result = update($id,$tabela,$set,$conecta);

	if($result)
		echo "editado com sucesso";
	else {
		echo "Não foi possível editar";
	}
}

/*-------------------*/

if (isset($_GET['acao']) && ($_GET['acao']=="logout")) {
	logout();
	unset($id);
}

/*---------logout */




?>
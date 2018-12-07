<?php


function cadastro($conecta,$tabela,$insert,$values){
	$sql = "INSERT INTO $tabela ($insert)  values ($values)";
	$result = mysqli_query($conecta,$sql);
	
	return $result;
}


function update($id,$tabela,$set,$conecta){
	$sql = "UPDATE $tabela SET $set WHERE idcliente= $id";
	$result = mysqli_query($conecta,$sql);

	return $result;
}

function buscar ($conecta,$selecao, $tabela, $where){
	$sql = "SELECT $selecao FROM $tabela ";
	if ($where != null){

	  $sql= $sql."WHERE ".$where;
	  
	}
	
	$result = mysqli_query($conecta,$sql);
	

	return $result;
}
function delete ($id,$tabela,$conecta){
	$sql = "DELETE FROM $tabela WHERE idcliente=$id";
	$result = mysqli_query($conecta,$sql);

	return $result;
}

function logout () {
	session_start();
	session_destroy();
	header('Location: ../index.php');
}

?>
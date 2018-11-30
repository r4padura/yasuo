<?php
require_once "controlador.php";
require_once "func.php";

$tamanho=$_POST['tamanho'];
$selecao = '*';
				$tabela = 'sabor';
				$where = 'status = "n"';
				$result = buscar($conecta, $selecao, $tabela, $where);

				if ($result) {

					$sabores = mysqli_fetch_all($result);
					
					 
				}


for($i=1; $i <= $tamanho; $i++)
{
	echo "Sabor $i";
?>
	<select name="sabor[]">

	<?php
	foreach ($sabores as $indice=>$sabor){
	echo "<option value='{$sabor[0]}'>{$sabor[3]}</option>";
	}
?>
	</select>
	<?php
}


?>
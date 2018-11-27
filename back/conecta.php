<?php
$host ="localhost";
$login ="root";
$senha ="";
$banco ="pizzaria";
$conecta = mysqli_connect($host,$login,$senha,$banco);

if (!$conecta) {
	die("erro");
}

?>
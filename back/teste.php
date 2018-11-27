<?php
$tamanho=$_POST['tamanho'];

if ($tamanho=='broto')
{
echo "sabor 1 <input type='text' name='sabor[]'>";
}
elseif ($tamanho=='media') {
	echo "sabor 1 <input type='text' name='sabor[]'>";
	echo "sabor 2 <input type='text' name='sabor[]'>";
}
?>
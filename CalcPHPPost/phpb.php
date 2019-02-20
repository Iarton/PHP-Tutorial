<?php
	$op = $_POST["op"];
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	if (is_numeric($num1) == false){
		echo "Numero 1 invalido";
	}else if(is_numeric($num2) == false){
		echo "Numero 2 invalido";
	}else{

	if ($op == '+'){
	$total = $num1 + $num2;
	echo "Resultado".": ".$total;
	}elseif ($op == '-'){
	$total = $num1	- $num2;
	echo "Resultado".": ".$total;
	}elseif ($op == '/'){
	$total = $num1 / $num2;
	echo "Resultado".": ".$total;
	}elseif ($op == '*'){
	$total = $num1 * $num2;
	echo "Resultado".": ".$total;
	}else{
		echo "Operação invalida! (Apenas +,-,/ ou *)";
	}
	}
?>
<?php
$num1 =  $_POST["campo1"];
$num2 =  $_POST["campo2"];

$soma = $num1 + $num2;

$multiplicacao = $num1 * $num2;

$divisao = $num1 / $num2;

$subtracao = $num1 - $num2;


echo "O valor da soma é: $soma";
echo "<br>O valor da divisão é: $divisao " ;
echo "<br>O valor da multiplicacao é: $multiplicacao";
echo "<br>O valor da subtracao é: $subtracao";
?>
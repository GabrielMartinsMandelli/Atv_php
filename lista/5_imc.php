<?php

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    return $imc;
}


$peso = 65;
$altura = 1.60;


$resultado = calcularIMC($peso, $altura);

echo "O IMC é: " . $resultado;
?>
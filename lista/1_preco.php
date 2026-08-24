<?php
// Define os valores iniciais
$preco = 100;
$quantidade =2;
$porcentagem= 0.10; // 10% de desconto

// Faz a multiplicação de $a por $b
$multiplicacao = $preco * $quantidade;
echo "Sem desconto aplicado. Valor total: $multiplicacao";
echo "<br>"; 

if ($multiplicacao >= 200) {
     $desconto = $multiplicacao * $porcentagem;
    $valor_final= $multiplicacao - $desconto;
    echo "Desconto de 10%: $desconto <br>";
    echo "Valor com desconto: $valor_final";
} 
?>
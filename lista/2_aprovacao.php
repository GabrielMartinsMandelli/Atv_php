<?php
//Classificando uma nota 
$nota = 9;
$faltas = 13;

//Verifica se o aluno foi aprovado
if ($nota >= 6 && $faltas <= 15) {
    echo "aprovado!😊";
} else {
    echo "reprovado!";
}
?>
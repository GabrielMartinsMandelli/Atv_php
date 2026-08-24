<?php
//vetor  ( array simples)
$notas = [9, 8, 5, 4, 2];
$soma = 0;
$maior = $notas[0];
$menor= $notas[0];

foreach ($notas as $nota) {
    $soma = $soma + $nota;

    if ($nota > $maior) {
        $nota = $maior;
    } 

    elseif ($nota < $menor) {
        $nota = $menor;
    }
}

$media = $soma / count($notas);
echo "<br>";
echo  "valor media da sala: $media <br>";
echo "Maior: $maior <br>";
echo "Menor: $menor <br>";

?>
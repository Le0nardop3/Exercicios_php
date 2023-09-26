<?php
$notas = [10, 5, 6.5, 8.5, 9, 5.5, 4.5, 8, 7.5];
$soma = 0;
$notamaior7 = 0;

for($i = 0; $i < count($notas); $i++){
    echo "$notas[$i]<br>";
    $soma += $notas[$i];
    $media = $soma/count($notas);
    if($notas[$i]>7){
        $notamaior7++; 
    }
}
echo "A soma das notas é: $soma <br>";
echo "A Media das notas é: $media <br>";
echo "A quantidade de notas maior que 7 é: $notamaior7"
?>
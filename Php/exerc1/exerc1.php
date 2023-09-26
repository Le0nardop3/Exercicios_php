<?php
$valor = (float) $_POST['valor'];
$parcela = (float) $_POST['parcela'];
$tipodepagamento = (string) $_POST['tipodepagamento'];



if ($tipodepagamento == "sim"){
    $precofinal = $valor-$valor*(20/100);
    echo "<h2>orçamento:</h2>";
    echo "O preço final será de R$ $precofinal <br>";
}
elseif($tipodepagamento == "nao") {
    $precofinal = $valor+$valor*($parcela/100);
    $qtdparcelas = $parcela*2;
    $valorparcela = $precofinal/$qtdparcelas;
    echo "<h2>orçamento:</h2>";
    echo "O preço final será de R$ $precofinal <br>";
    echo "A quantiddade de parcelas é: $qtdparcelas <br>";
    echo "O valor de cada parcela é de R$: $valorparcela";
}
?>
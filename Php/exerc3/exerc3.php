<?php
$codigo = (float) $_POST['codigo'];
$quantidade = (float) $_POST['quantidade'];

if ($codigo > 0 && $codigo <= 10) {
    $preco = 10;
}elseif ($codigo > 10 && $codigo <= 20) {
    $preco = 15;
}elseif ($codigo > 20  && $codigo <= 30) {
    $preco = 20;
}elseif ($codigo > 30 && $codigo <= 40) {
    $preco = 30;
}else {
    echo "Voce não digitou codigo que esteja na tabela! <br>";
}

$valor_compra = $preco*$quantidade;

if ($valor_compra > 0 && $valor_compra <= 250) {
    $desconto = 5/100;
}elseif($valor_compra > 250 && $valor_compra <= 500) {
    $desconto = 10/100;
}elseif($valor_compra > 500) {
    $desconto = 15/100;
}

$valor_desconto = $valor_compra*$desconto;
$valor_final = $valor_compra-$valor_desconto;

echo "<table border> <tr> <td colspan = 2> <b>Dados da compra: </b> </td> </tr>";
echo "<tr> <td>O preço unitario do produto é: </td>  <td> R$ $preco</td> </tr>";
echo "<tr> <td>A quantidade comprada do produto é: </td>  <td> $quantidade </td> </tr>";
echo "<tr> <td>O preço total da nota é: </td>  <td> R$ $valor_compra </td> </tr>";
echo "<tr> <td>O valor do desconto: </td>  <td> R$ $valor_desconto </td> </tr>";
echo "<tr> <td>O valor final é: </td>  <td> R$ $valor_final </td> </tr> </table>";
?>
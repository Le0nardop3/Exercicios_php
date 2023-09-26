<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <h1>Calculadora - Concessionária</h1>
    <form action="exerc1.php" method="post">
    <fieldset>
    <legend>Dados:</legend>
    <P>Digite os dados para fazer o orçamento, em caso de compra a vista é aplicado um desconto de 20% </P>
    Digite o valor do carro R$:<input type="text" name="valor" id="valor">
    <br><br>
    O pagamento será a vista? 
    <select name="tipodepagamento" id="tipodepagamento">
        <option value="nao">não</option>
        <option value="sim">sim</option>
    </select>
    <br><br>
    Caso o modo de pagamento não seja a vista, selecione a quantidade de parcelas: 
    <select name="parcela" id="parcela">
        <option value="3">6</option>
        <option value="6">12</option>
        <option value="9">18</option>
        <option value="12">24</option>
        <option value="15">30</option>
        <option value="18">36</option>
        <option value="21">42</option>
        <option value="24">48</option>
        <option value="27">54</option>
        <option value="30">60</option>
    </select>
    <br><br>
    <button>Calcular</button>
    <br>
    <span>Antes de calcular confira a tabela a baixo:</span>
    </fieldset>
    </form><br>
    <table border="">
        <tr>  <td><b>Quantidade de parcelas</b></td>  <td><b>Percentual de Acrescimo sobre o preço final</b></td>   </tr>
        <tr>  <td>6</td>  <td>3%</td>   </tr>
        <tr>  <td>12</td>  <td>6%</td>   </tr>
        <tr>  <td>18</td>  <td>9%</td>   </tr>
        <tr>  <td>24</td>  <td>12%</td>   </tr>
        <tr>  <td>30</td>  <td>15%</td>   </tr>
        <tr>  <td>36</td>  <td>18%</td>   </tr>
        <tr>  <td>42</td>  <td>21%</td>   </tr>
        <tr>  <td>48</td>  <td>24%</td>   </tr>
        <tr>  <td>54</td>  <td>27%</td>   </tr>
        <tr>  <td>60</td>  <td>30%</td>   </tr>
    </table>

</body>
</html>
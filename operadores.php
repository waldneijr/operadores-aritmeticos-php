<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2> Valores recebidos: $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2;
        $soma = $n1 + $n2;
        echo " - A soma de $n1 e $n2 é $soma";
        echo "<br> - A subtração vale ". ($n1 - $n2);
        echo "<br> -  A multiplicação vale ". ($n1 * $n2);
        echo "<br> - A divisão vale ". ($n1 / $n2);
        echo "<br> - O módulo vale ". ($n1 % $n2);
        echo "<br> - A média entre os números é $m";
        echo "<br><h2> Valores recebidos: $v1 e $v2</h2>";
        echo "<br> - O valor absoluto de $v2 é " .abs($v2);
        echo "<br> - O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
        echo "<br> - A raiz de $v1 é " .sqrt($v1);
        echo "<br> - O valor arredondado de $v1 é " .round($v1);
        echo "<br> - A parte inteira de $v2 é " .intval($v2);
        echo "<br> - O valor de $v1 em moeda é $ " .number_format($v1, 2, ",", ".")


    ?>
</div>
</body>
</html>
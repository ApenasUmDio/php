<html><head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $valor1 = 5;
    $valor2 = 10;
    $resultado = $valor1 + $valor2;
    echo ($resultado);
    echo "<br>";
    $soma1 = 73;
    $soma2 = 11;
    $soma3 = 16;
    $resultadoSoma = $soma1 + $soma2 + $soma3;
    echo ($resultadoSoma);
    echo "<br>";
    $mult1 = 10;
    $multi2 = 5;
    $resultadoMult = $mult1 * $multi2;
    echo ($resultadoMult);
    echo "<br>";
    $salario = 2300;
    $aumento = 2300*15/100;
    $novoSalario = $salario + $aumento;
    echo ("O novo salario será de: ".$novoSalario." e o aumento foi de  ".$aumento."  ou 15%");
    echo "<br>";
    $horas = 5;
    $minutos = $horas*60;
    echo ("5 horas são: ".$minutos."  minutos.");
    echo ("<br>"); 
    $horaExtra = 4*63;
    $salarioBruto = 2300;
    $inss = 8/100;
    $salarioBrutoDescontado = $salarioBruto-$salarioBruto*$inss;
    $horaExtraDescontada = $horaExtra-$horaExtra*$inss;
    $salarioLiquido = $salarioBrutoDescontado + $horaExtraDescontada;
    echo ("O salario bruto COM desconto é: ".$salarioBrutoDescontado."<br>"."O valor das horas extras COM desconto é:".$horaExtraDescontada."<br>"." Já o salario liquido(total de tudo) é de:".$salarioLiquido)

?>
</body>
</html>
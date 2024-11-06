<html><head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    // $valor1 = 5;
    // $valor2 = 10;
    // $resultado = $valor1 + $valor2;
    // echo ($resultado);
    // echo "<br>";
    // $soma1 = 73;
    // $soma2 = 11;
    // $soma3 = 16;
    // $resultadoSoma = $soma1 + $soma2 + $soma3;
    // echo ($resultadoSoma);
    // echo "<br>";
    // $mult1 = 10;
    // $multi2 = 5;
    // $resultadoMult = $mult1 * $multi2;
    // echo ($resultadoMult);
    // echo "<br>";
    // $salario = 2300;
    // $aumento = 2300*15/100;
    // $novoSalario = $salario + $aumento;
    // echo ("O novo salario será de: ".$novoSalario." e o aumento foi de  ".$aumento."  ou 15%");
    // echo "<br>";
    // $horas = 5;
    // $minutos = $horas*60;
    // echo ("5 horas são: ".$minutos."  minutos.");
    // echo ("<br>"); 
    // $horaExtra = 4*63;
    // $salarioBruto = 2300;
    // $inss = 8/100;
    // $salarioBrutoDescontado = $salarioBruto-$salarioBruto*$inss;
    // $horaExtraDescontada = $horaExtra-$horaExtra*$inss;
    // $salarioLiquido = $salarioBrutoDescontado + $horaExtraDescontada;
    // echo ("O salario bruto COM desconto é: ".$salarioBrutoDescontado."<br>"."O valor das horas extras COM desconto é:".$horaExtraDescontada."<br>"." Já o salario liquido(total de tudo) é de:".$salarioLiquido)
    $nota = 70;
    $notaDeCorte = 60;
    $resultado = $nota <=> $notaDeCorte;
    switch ($resultado){
        case -1:
            echo "REPROVADO!";
            break;
        case 0:
            echo "Você está na média. Aprovado!";
            break;
        case 1: 
            echo "APROVADO!";
            break;}
            echo "<br>","<br>","<br>","<br>","<br>";
    $num = 31;
    $resul = $num %2==0 ? "Par":"Impar";
    echo $resul;
    echo "<br>","<br>","<br>","<br>","<br>";
    $sla = 48;
    echo match ($sla <=> 0){
        -1 => "negativo<br>",
        0 => "neutro<br>",
        1 => "positivo<br>",
    };
    echo "<br>","<br>","<br>","<br>","<br>";
    $nome = "Joao Pedro";
    $sobrenome = "Ferreira";
    $allName = $nome." ".$sobrenome;
    echo "Bem vindo". " ".$allName;
    echo "<br>","<br>","<br>","<br>","<br>";

    date_default_timezone_set('America/Sao_Paulo');
    echo date('H');
    $hora =date('H');
    if($hora>=7 && $hora <=12){
        echo " Acorda porra, Bomdia";
    }
    elseif ($hora>= 13 && $hora<=18){
        echo " Hora do café nessa porra, Boatarde";
    }
    elseif ($hora >=19 && $hora <=23){
        echo " Vai tomar banho nessa porra, Boanoite";
    }
    else{
        echo "";
    }
    echo "<br>","<br>","<br>","<br>","<br>";

    $idade = 21;
    if($idade >=18){
        echo "Você a porra de um adulto(possivelmente desempregado)";
    }
    $nota = 7;
    echo "<br>","<br>","<br>","<br>","<br>";
    if ($nota >=6){
        echo "Aprovado";
    }
    else{
        echo "Reprovado";
    }
    echo "<br>","<br>","<br>","<br>","<br>";

    $nota2 = 8;
    if ($nota2 >=9){
        echo "EXCELENTE!";
    }
    elseif ($nota2 >=7){
        echo "BOM!";
    }
    elseif ($nota2 >=5){
        echo "Precisa melhorar!";
    }
    else {
        echo "REPROVADO!";
    }
    echo "<br>","<br>","<br>","<br>","<br>";

    $cor = "azul";
    switch ($cor){
        case "vermelho":
            echo "Cor quente!";
            break;
        case "verde":
            echo "Cor neutra!";
            break;
        case "azul":
            echo "Cor fria!";
            break;
        default:
            echo "Cor desconhecida";
            break;
    }
    echo "<br>","<br>","<br>","<br>","<br>";

    $estado = "Mg";
    echo match($estado){
        "SP" => "São Paulo",
        "Mg" => "Minas Gerais",
        "Rj" => "Rio de Janeiro",
        default => "Estado desconhecido"
    };
    echo "<br>","<br>","<br>","<br>","<br>";
    $bah = 1;
    while ($bah <= 5) {
        echo $bah;
    $bah++;}
    echo "<br>","<br>","<br>","<br>","<br>";
    for ($asd = 0; $asd <= 10; $asd += 2) {
        echo $asd;
}
    echo "<br>","<br>","<br>","<br>","<br>";
    $nomes = ["Ana",", " ,"Bruno",", ", "Carlos",", ", "Diana"]; // você pode adicionar mais nomes

    foreach ($nomes as $nomea) {
        echo $nomea;
    }
    
?>
</body>
</html>
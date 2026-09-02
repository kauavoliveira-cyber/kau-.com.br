<?php

// 1 - Calcula o IMC
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// 2 - Maior e menor
function maiorMenor($n1, $n2) {
    if ($n1 > $n2) {
        return "Maior: $n1 | Menor: $n2";
    } else {
        return "Maior: $n2 | Menor: $n1";
    }
}

// 3 - Par ou ímpar
function parImpar($numero) {
    if ($numero % 2 == 0) {
        return "O número é PAR";
    } else {
        return "O número é ÍMPAR";
    }
}

// 4 - Média
function media($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

// 5 - Fatorial
function fatorial($n) {
    $resultado = 1;

    for ($i = 1; $i <= $n; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}

// 6 - Soma
function soma($a, $b) {
    return $a + $b;
}

// 7 - Área do círculo
function areaCirculo($raio) {
    return 3.14 * ($raio * $raio);
}

// 8 - Celsius para Fahrenheit
function converterTemperatura($celsius) {
    return ($celsius * 9 / 5) + 32;
}

// 9 - Tabuada
function tabuada($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}

// 10 - Desconto
function desconto($valor, $desc) {
    return $valor - ($valor * $desc / 100);
}


function media_nota($nota1,$nota2,$nota3,$disciplina){ {
   

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "nota 1:" . $nota1 . "<br>";
echo "nota 2:" . $nota2 . "<br>";
echo "nota 3:" . $nota3 . "<br>";
if ($media >= 6 ) {

echo "disciplina: " . $disciplina . "<br>";
echo "media: " . $media . "<br>";
echo "aprovado";

} else {
    echo "disciplina: " . $disciplina . "<br>";
    echo "media: " . $media . "<br>";
    echo "reprovado";
}


}


?>


<?php
include_once    "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $resultado = calcularIMC($peso, $altura);

    echo "Seu IMC é: " . $resultado;
}
?>

<form method="post">
    Peso: <input type="number" step="0.01" name="peso"><br><br>
    Altura: <input type="number" step="0.01" name="altura"><br><br>

    <input type="submit" value="Calcular IMC">
</form>
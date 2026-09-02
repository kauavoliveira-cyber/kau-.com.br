<?php
include_once "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];
    $desc = $_POST["desc"];

    echo "Valor final: R$ " . desconto($valor, $desc);
}
?>

<form method="post">
    Valor:
    <input type="number" step="0.01" name="valor"><br><br>

    Desconto (%):
    <input type="number" step="0.01" name="desc"><br><br>

    <input type="submit" value="Calcular Desconto">
</form>
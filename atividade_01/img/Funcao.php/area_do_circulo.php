<?php
include_once "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raio = $_POST["raio"];

    echo "Área do círculo: " . areaCirculo($raio);
}
?>

<form method="post">
    Raio:
    <input type="number" step="0.01" name="raio"><br><br>

    <input type="submit" value="Calcular Área">
</form>
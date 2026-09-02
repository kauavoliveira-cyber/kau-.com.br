<?php
include_once "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST["celsius"];

    echo "Temperatura em Fahrenheit: " . converterTemperatura($celsius) . " °F";
}
?>

<form method="post">
    Celsius:
    <input type="number" step="0.01" name="celsius"><br><br>

    <input type="submit" value="Converter">
</form>
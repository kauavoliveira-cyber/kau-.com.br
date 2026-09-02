<?php
include_once "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    tabuada($numero);
}
?>

<form method="post">
    Digite um número:
    <input type="number" name="numero"><br><br>

    <input type="submit" value="Mostrar Tabuada">
</form>
<?php
include_once "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    echo "Média: " . media($n1, $n2, $n3);
}
?>

<form method="post">
    Número 1: <input type="number" name="n1"><br><br>
    Número 2: <input type="number" name="n2"><br><br>
    Número 3: <input type="number" name="n3"><br><br>

    <input type="submit" value="Calcular Média">
</form>
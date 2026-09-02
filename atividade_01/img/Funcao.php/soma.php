<?php
include_once "funcao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    echo "Resultado: " . soma($n1, $n2);
}
?>

<form method="post">
    Número 1: <input type="number" name="n1"><br><br>
    Número 2: <input type="number" name="n2"><br><br>

    <input type="submit" value="Somar">
</form>
<?php 
<form action="calcula_nota.php" method="post">
    Disciplina: <input type="text" name="disciplina"><br><br>
    Nota 1: <input type="number" step="0.01" name="nota1"><br><br>
    Nota 2: <input type="number" step="0.01" name="nota2"><br><br>
    Nota 3: <input type="number" step="0.01" name="nota3"><br><br>

    <input type="submit" value="Calcular Média">



require_once "funções.php";
$disciplina = $_POST["disciplina"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

media_nota($nota1,$nota2,$nota3,$disciplina);






?>
<form method="POST" action="atividade_01/post_get_mesma_pagina.php">

<input type="text" name="cor" value="">  <br>

<input type="text" name="tipo" value="">  <br>

<input type="submit" value="Cadastrar">

</form>

<?php
$cor=$_POST ["cor"] ?? "";
$tipo=$_POST["tipo"] ??"";
$Produto =$_POST["Produto"] ?? "(não selecionado)";
echo "A cor do $Produto é $cor do tipo:  $tipo";

?>  
<?php 
//login.php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === "kaua" && $senha === "1234") {
 requiere "funcoes.php";
 header("location: painel.php");
 exit;
} else {
    header("location: index.php?msg=erro");
    exit;
}
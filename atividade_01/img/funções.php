<?php 
function mensagem ($texto) {
    echo "<p>$texto</p>";
}
 function login($usuario, $senha, $email) {
    if ($usuario === "admin" && $senha === "1234" && $email === "admin@example.com") {
        return true;
    } else {
        return false;
    }
}
mensagem("login realizado com sucesso!");
?>
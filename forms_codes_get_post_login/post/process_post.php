<?php 
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

    echo "<h2>Dados do formulário POST</h2>";
    echo "usuario: " . htmlspecialchars($usuario) . "<br>";
    echo "Senha: " . htmlspecialchars($senha) . "<br>";
?>
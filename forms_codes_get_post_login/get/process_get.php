<?php 
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    echo "<h2>Dados do formulário GET</h2>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
?>
<?php 
    // Dados de conexão com o banco de dados

    $servername = "localhost";
    $username = "root";
    $password = ""; // Colocar senha caso tenha
    $dbname = "loginDB";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Coleta os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o nome de usuário e a senha correspondem aos dados de acesso
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // O nome de usuário e a senha correspondem, redireciona para a página inicial
        echo "Login efetuado com sucesso!";
        exit();
    } else {
        echo "Nome de usuário ou senha inválidos.";
    }

    $conn->close();

?>



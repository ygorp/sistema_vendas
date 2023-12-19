<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Adiciona uma mensagem de sucesso na sessão
        session_start();
        $_SESSION['success_message'] = "Cadastro realizado com sucesso!";
        header("Location: cadastro.php"); // Redireciona para a página do formulário de cadastro
        exit();
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
}

$conn->close();
?>

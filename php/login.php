<?php
 include_once("db.php");

  // Verifica se o formulário foi submetido
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário de login
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Verifica se o usuário existe e a senha está correta
    if ($result->num_rows == 1) {
      // Inicia a sessão e armazena o nome de usuário na variável de sessão
      session_start();
      $_SESSION["username"] = $username;

      // Redireciona o usuário para a página de boas-vindas
      header("Location: home.php");
      exit();
    } else {
      // Exibe uma mensagem de erro se as credenciais do usuário estão incorretas
      $error_message = "Nome de usuário ou senha inválido.";
    }
  }
?>
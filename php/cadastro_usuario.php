<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <!-- Exibe a mensagem de sucesso se existir -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <div id="success-message">
            <?php
            echo $_SESSION['success_message'];
            unset($_SESSION['success_message']); // Limpa a mensagem da sessão
            ?>
        </div>
    <?php endif; ?>

    <div class="login-container">
        <h2>Cadastre-se</h2>
        <form action="cadastrar.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
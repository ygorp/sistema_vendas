<?php
// Verificar a sessão ou redirecionar para a página de login
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h2>
        <!-- Adicione os links para outras páginas (nova venda, novo vendedor, relatórios) -->
        <a href="nova_venda.php">Nova Venda</a>
        <a href="novo_vendedor.php">Novo Vendedor</a>
        <a href="relatorios.php">Relatórios</a>
        <a href="php/logout.php">Logout</a>
    </div>
</body>
</html>

<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "72921804";
$dbname = "vendas";

// Conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>

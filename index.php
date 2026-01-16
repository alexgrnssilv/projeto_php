<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: public/formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Página inicial</title>
</head>
<body>
    <h1>Dashboard</h1>

    <a href="public/formTarefa.php">Criar Tarefa</a><br><br>
    <a href="public/painel.php">Listar Tarefas</a><br><br>
    <a href="actions/logout.php">Desconectar</a>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefa</title>
</head>
<body>
    <h1>Nova Tarefa</h1>

    <form action="../actions/cadastroTarefas.php" method="post">
        <input type="text" name="titulo" placeholder="Titulo da Tarefa"><br><br>
        <textarea name="descricao" placeholder="Descrição da Tarefa"></textarea>
        <input type="submit" value="Cadastrar Tarefa">
    </form>
</body>
</html>
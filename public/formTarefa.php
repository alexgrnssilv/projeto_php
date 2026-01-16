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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Criar Tarefa</title>
</head>
<body>
   <div class="task-card">
  <h2>Nova Tarefa</h2>
  <p class="subtitle">Adicione um título e uma descrição para sua tarefa</p>

  <form>
    <label for="titulo">Título</label>
    <input type="text" id="titulo" placeholder="Ex: Estudar PHP">

    <label for="descricao">Descrição</label>
    <textarea id="descricao" placeholder="Descreva a tarefa..."></textarea>

    <button type="submit">Salvar Tarefa</button>
  </form>
  <a href="painel.php" class="btn-secondary">← Voltar para tarefas</a>


</div>


</body>
</html>
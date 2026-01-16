<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../public/formLogin.php");
    exit;
}

require "../includes/functions.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $titulo = limparDados($_POST['titulo']);
    $descricao = limparDados($_POST['descricao']);
    
    if (!isset($titulo) || !isset($descricao) || empty($titulo) || empty($descricao)) {
        $_SESSION['erro_tarefa'] = "Preencha todos os campos.";
        header("Location: ../public/formTarefa.php");
        exit;
    }

    $fileName = "../dados/tarefas.json";
    $tarefas = lerDados($fileName);

    $novaTarefa = [
        "id_tarefa" => count($tarefas) + 1,
        "email_usuario" => $_SESSION['usuario']['email'],
        "titulo" => $titulo,
        "descricao" => $descricao
    ];

    $tarefas[] = $novaTarefa;
    salvarDados($fileName, $tarefas);
    $_SESSION['tarefa_criada'] = "Tarefa criada com sucesso.";
    header("Location: ../public/painel.php");
    exit;

} else {
    $_SESSION['erro_form_tarefa'] = "Formulário inválido";
    header("Location: ../public/formTarefa.php");
    exit;
}
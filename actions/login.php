<?php
session_start();

require "../includes/functions.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $email = limparDados($_POST['email']);
    $senha = limparDados($_POST['senha']);

    if (!isset($email) || empty($email) || !isset($senha) || empty($senha)) {
        $_SESSION['erro_login'] = "Preencha todos os campos.";
        header("Location: ../public/formLogin.php");
        exit;
    }

    // Acessar o arquivo de usuários
    $fileName = "../dados/usuarios.json";
    $usuarios = lerDados($fileName);

    // Percorrer todos os dados
    foreach($usuarios as $u) {

    // Verificar se os dados existem
    if ($u['email'] == $email && password_verify($senha, $u['senha'])) {    
        $_SESSION['usuario'] = [
            "nome" => $u['nome'],
            "email" => $u['email']
        ];
        header("Location: ../public/painel.php");
        exit;
    }
}
// SE CHEGOU AQUI, SIGNIFICA QUE NÃO ACHOU
$_SESSION['erro_usuario'] = "Email ou senha incorretos";
header("Location: ../public/formLogin.php");
exit;

} else {
    $_SESSION['erro_form'] = "Formulário inválido.";
    header("Location: ../public/formLogin.php");
    exit;
}
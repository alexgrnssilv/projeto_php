
<?php
session_start();

require "../includes/functions.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $nome = limparDados($_POST['nome']);
    $email = limparDados($_POST['email']);
    $senha = limparDados($_POST['senha']);

    if (!isset($nome) || !isset($email) || !isset($senha) || empty($nome) || empty($email) || empty($senha)) {
        $_SESSION['erro_cadastro'] = "Preencha todos os campos";
        header("Location: ../public/formCadastroUsuario.php");
        exit;
    }

    $fileName = "../dados/usuarios.json";
    $usuarios = lerDados($fileName);

    $novoUsuario = [
        "nome" => $nome,
        "email" => $email,
        "senha" => password_hash($senha, PASSWORD_DEFAULT)
    ];

    $usuarios[] = $novoUsuario;

    salvarDados($fileName, $usuarios);
    $_SESSION['usuario_cadastrado'] = "Usuário cadastrado com sucesso.";
    header("Location: ../public/formLogin.php");
    exit;

} else {
   $_SESSION['erro_form'] = "Formulário Inválido.";
   header("Location: ../public/formCadastroUsuario.php");
   exit;
}
<?php

// Exemplo de leitura de dados
function lerDados($arquivo) {
    $conteudo = file_get_contents($arquivo);
    return json_decode($conteudo, true);
}

// Exemplo de Escrita em JSON
function salvarDados($arquivo, $dados) {
    $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents($arquivo, $conteudo);
}

function limparDados($dado) {
    $conteudo = trim(htmlspecialchars($dado));
    return $conteudo;
}
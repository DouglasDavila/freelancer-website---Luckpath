<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pegar os dados do formulário
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    // Salvar na sessão
    $_SESSION['user_id'] = uniqid(); // Gera um ID único
    $_SESSION['user_email'] = $email;
    
    // Redirecionar para a página inicial
    header('Location: inicial.php');
    exit;
}

// Se algo der errado, volta para a página de cadastro
header('Location: cadastro.php');
exit;
?> 
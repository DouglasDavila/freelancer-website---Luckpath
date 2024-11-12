<?php
session_start(); // Inicia a sessão para verificar se usuário está logado
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luckypath - Encontre Freelancers</title>
    <link rel="stylesheet" href="../style/inicial.css">
</head>
<body>
    <header class="header">
        <div class="logo">Luckypath</div>
        <nav class="nav-links">
            <a href="info.php" class="header-button">Conta</a>
            <?php if(isset($_SESSION['email'])): ?>
                <a href="logout.php" class="header-button">Sair</a>
            <?php else: ?>
                <a href="cadastro.php" class="header-button">Criar Conta</a>
            <?php endif; ?>
        </nav>
    </header>

    <nav class="sub-nav">
        <a href="#">Encontra Freelancers</a>
        <a href="#">Encontrar Trabalho</a>
    </nav>

    <main class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Encontre o melhor profissional freelancer<br>para o que você precisar</h1>
            <div class="button-container">
                <a href="#" class="button button-primary">Crie seu Projeto</a>
                <a href="#" class="button button-secondary">Oferte seu Serviço</a>
            </div>
        </div>
    </main>
</body>
</html> 
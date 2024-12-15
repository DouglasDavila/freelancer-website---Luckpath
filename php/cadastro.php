<?php
session_start();

// Adicione este código no início do arquivo para processar o formulário
if (isset($_POST['acao']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    header("Location: inicial.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="../style/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="bem-vindo">
                <h2>Bem Vindo!</h2>
                <p>Já possui uma conta?</p>
                <a href="login.php" class="btn-outline">Fazer Login</a>
                <p class="divider">Ou se preferir</p>
                <a href="inicial.php" class="btn-outline">Entrar sem conta</a>
            </div>
            <div class="form-card">
                <h1>Criar Conta</h1>
                <form action="processa_cadastro.php" method="POST">
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="72">
                            <i class="far fa-eye" id="togglePassword" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar senha" maxlength="72">
                            <i class="far fa-eye" id="toggleConfirmPassword" aria-hidden="true"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary" name="acao" value="Salvar">Criar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/cadastro.js"></script>
</body>

</html>
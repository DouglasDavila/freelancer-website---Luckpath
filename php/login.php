<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-form">
                <h1>Login</h1>
                <form action="process_login.php" method="POST" autocomplete="off">
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email" required 
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" name="senha" id="senha" placeholder="Senha" required 
                                   minlength="8" maxlength="72">
                            <i class="far fa-eye" id="togglePassword" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" name="confirmar_senha" id="confirmar_senha" 
                                   placeholder="Confirmar senha" required minlength="8" maxlength="72">
                            <i class="far fa-eye" id="toggleConfirmPassword" aria-hidden="true"></i>
                        </div>
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
            <div class="welcome-section">
                <h2>Que Bom Te Ver!</h2>
                <p>Não possui uma conta?</p>
                <a href="cadastro.php" class="btn-outline">Cadastrar-se</a>
                <p class="divider">Ou se preferir</p>
                <a href="../guest.php" class="guest-btn">Entrar sem conta</a>
            </div>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>
</html> 
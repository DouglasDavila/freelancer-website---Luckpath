<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../final/style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-form">
                <h1>Login</h1>
                <form>
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" name="senha" id="senha" placeholder="Senha" required>
                            <i class="far fa-eye" id="togglePassword"></i>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar senha" required>
                            <i class="far fa-eye" id="toggleConfirmPassword"></i>
                        </div>
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
            <div class="welcome-section">
                <h2>Que Bom Te Ver!</h2>
                <p>Não possui uma conta?</p>
                <a href="../final/cadastro.php" class="btn-outline">Cadastrar-se</a>
                <p class="divider">Ou se preferir</p>
                <button class="guest-btn">Entrar sem conta</button>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const senha = document.querySelector('input[name="senha"]');
            const type = senha.getAttribute('type') === 'password' ? 'text' : 'password';
            senha.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            const confirmarSenha = document.querySelector('input[name="confirmar_senha"]');
            const type = confirmarSenha.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmarSenha.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html> 
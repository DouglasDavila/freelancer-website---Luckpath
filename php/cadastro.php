<?php
session_start();

// Adicione este código no início do arquivo para processar o formulário
if(isset($_POST['acao'])) {
    $_SESSION['email'] = $_POST['email'];
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
        <div class="card-container">
            <div class="welcome-side">
                <h2>Bem Vindo!</h2>
                <?php if(isset($_SESSION['email'])): ?>
                    <p>Deseja sair da sua conta?</p>
                    <a href="logout.php" class="btn-outline">Sair</a>
                <?php else: ?>
                    <p>Já possui uma conta?</p>
                    <a href="login.php" class="btn-outline">Fazer Login</a>
                    <p class="divider">Ou se preferir</p>
                    <a href="inicial.php" class="btn-outline">Entrar sem conta</a>
                <?php endif; ?>
            </div>
            <div class="form-side">
                <?php if(isset($_SESSION['email'])): ?>
                    <h1>Você está logado como:</h1>
                    <p><?php echo $_SESSION['email']; ?></p>
                <?php else: ?>
                    <h1>Criar Conta</h1>
                    <form action="processa_cadastro.php" method="POST" autocomplete="off">
                        <div class="input-group">
                            <input type="email"
                                name="email"
                                id="email"
                                placeholder="Email"
                                required
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="input-group">
                            <div class="password-container">
                                <input type="password"
                                    name="senha"
                                    id="senha"
                                    placeholder="Senha"
                                    required
                                    minlength="8"
                                    maxlength="72">
                                <i class="far fa-eye" id="togglePassword" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="password-container">
                                <input type="password"
                                    name="confirm"
                                    id="confirm"
                                    placeholder="Confirmar senha"
                                    required
                                    minlength="8"
                                    maxlength="72">
                                <i class="far fa-eye" id="toggleConfirmPassword" aria-hidden="true"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary" name="acao" value="Salvar">Criar</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="../js/cadastro.js"></script>
    <script>
        document.querySelector('form').onsubmit = function(e) {
            if (document.getElementById('senha').value !== document.getElementById('confirmar_senha').value) {
                e.preventDefault();
                alert('As senhas não coincidem!');
                return false;
            }
        };
    </script>
</body>

</html>
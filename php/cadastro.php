<?php
session_start();
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
                <p>Já possui uma conta?</p>
                <a href="login.php" class="btn-outline">Fazer Login</a>
                <p class="divider">Ou se preferir</p>
                <a href="inicial.php" class="btn-outline">Entrar sem conta</a>
            </div>
            <div class="form-side">
                <h1>Criar Conta</h1>
                <form action="process_cadastro.php" method="POST" autocomplete="off">
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
                                   name="confirmar_senha" 
                                   id="confirmar_senha" 
                                   placeholder="Confirmar senha" 
                                   required 
                                   minlength="8" 
                                   maxlength="72">
                            <i class="far fa-eye" id="toggleConfirmPassword" aria-hidden="true"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary">Criar</button>
                </form>
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
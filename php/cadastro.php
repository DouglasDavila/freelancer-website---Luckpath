<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' https://cdnjs.cloudflare.com; script-src 'self'">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="../style/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
          crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <div class="container">
        <div class="card-container">
            <div class="welcome-side">
                <h2>Bem Vindo!</h2>
                <p>Já possui uma conta?</p>
                <a href="login.php" class="btn-outline" rel="noopener">Fazer Login</a>
                <p class="divider">Ou se preferir</p>
                <a href="../guest.php" class="btn-outline" rel="noopener">Entrar sem conta</a>
            </div>
            <div class="form-side">
                <h1>Criar Conta</h1>
                <form action="process_cadastro.php" method="POST" autocomplete="off">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(session_id()); ?>">
                    <div class="input-group">
                        <input type="email" 
                               name="email" 
                               id="email" 
                               placeholder="Email" 
                               required 
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                               autocomplete="off">
                    </div>
                    <div class="input-group">
                        <div class="password-container">
                            <input type="password" 
                                   name="senha" 
                                   id="senha" 
                                   placeholder="Senha" 
                                   required 
                                   minlength="8" 
                                   maxlength="72"
                                   autocomplete="new-password">
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
                                   maxlength="72"
                                   autocomplete="new-password">
                            <i class="far fa-eye" id="toggleConfirmPassword" aria-hidden="true"></i>
                        </div>
                    </div>
                    <button type="submit" 
                            class="btn-primary"
                            data-action="submit">Criar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/cadastro.js" defer integrity="sha384-VALOR_DO_HASH"></script>

    <script nonce="<?php echo htmlspecialchars(uniqid()); ?>">
        document.querySelector('form').addEventListener('submit', function(e) {
            const senha = document.getElementById('senha').value;
            const confirmarSenha = document.getElementById('confirmar_senha').value;
            
            if (senha !== confirmarSenha) {
                e.preventDefault();
                alert('As senhas não coincidem!');
            }
        });
    </script>
</body>

</html>
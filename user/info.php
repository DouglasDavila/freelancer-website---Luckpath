<?php
// Verificar se usuário está logado e obter dados do usuário
// ... código de verificação de sessão aqui ...
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Conta</title>
    <link rel="stylesheet" href="../style/info.css">
</head>
<body>
    <div class="containers-wrapper">
        <div class="container profile-container">
            <h2>Noob Hajime</h2>
            <img src="profile-image.jpg" alt="Foto de perfil" class="profile-image">
            <p>Qui.</p>
            <button class="change-photo-btn">Mudar foto de perfil</button>
            <div class="social-links">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
            <p class="member-since">Membro desde 16 de Outubro de 2024</p>
        </div>

        <div class="container form-container">
            <div class="edit-form">
                <h2>Editar Conta</h2>
                <form action="update_profile.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" value="Noob Hajime">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" value="Ratatouille@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" value="********">
                    </div>

                    <div class="form-group">
                        <label for="confirmar_senha">Confirmar senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" value="********">
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="save-btn">Salvar Alterações</button>
                        <a href="#" class="info-link">Informações Pessoais</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

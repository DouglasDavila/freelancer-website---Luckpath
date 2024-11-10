document.addEventListener('DOMContentLoaded', function() {
    // Toggle para o campo de senha
    document.getElementById('togglePassword').addEventListener('click', function() {
        const senha = document.querySelector('input[name="senha"]');
        const type = senha.getAttribute('type') === 'password' ? 'text' : 'password';
        senha.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    // Toggle para o campo de confirmar senha
    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        const confirmarSenha = document.querySelector('input[name="confirmar_senha"]');
        const type = confirmarSenha.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmarSenha.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
}); 
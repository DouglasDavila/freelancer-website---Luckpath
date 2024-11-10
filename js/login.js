document.addEventListener('DOMContentLoaded', function() {
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
}); 
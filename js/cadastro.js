window.onload = function() {
    // Toggle primeira senha
    document.getElementById('togglePassword').onclick = function() {
        var senha = document.getElementById('senha');
        senha.type = senha.type === 'password' ? 'text' : 'password';
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    };

    // Toggle segunda senha
    document.getElementById('toggleConfirmPassword').onclick = function() {
        var confirmarSenha = document.getElementById('confirmar_senha');
        confirmarSenha.type = confirmarSenha.type === 'password' ? 'text' : 'password';
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    };
};

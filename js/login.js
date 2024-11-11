function togglePasswordVisibility(inputId, toggleId) {
    const input = document.getElementById(inputId);
    const toggle = document.getElementById(toggleId);
    
    toggle.addEventListener('click', function() {
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        
        toggle.classList.toggle('fa-eye');
        toggle.classList.toggle('fa-eye-slash');
    });
}

document.addEventListener('DOMContentLoaded', function() {
    togglePasswordVisibility('senha', 'togglePassword');
    togglePasswordVisibility('confirmar_senha', 'toggleConfirmPassword');

    document.querySelector('form').addEventListener('submit', function(e) {
        const senha = document.getElementById('senha').value;
        const confirmarSenha = document.getElementById('confirmar_senha').value;
        
        if (senha !== confirmarSenha) {
            e.preventDefault();
            alert('As senhas não coincidem!');
        }
    });
}); 
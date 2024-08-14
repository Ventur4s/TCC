document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('signup-form');
    
    form.addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm-password').value;
        
        if (password !== confirmPassword) {
            alert('As senhas não coincidem!');
            event.preventDefault(); // Impede o envio do formulário
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('login-form');
    
    form.addEventListener('submit', function(event) {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Simples validação de exemplo
        if (email === '' || password === '') {
            alert('Por favor, preencha todos os campos!');
            event.preventDefault(); // Impede o envio do formulário
        }
        
        // Adicione aqui a lógica para autenticação do usuário se necessário
    });
});

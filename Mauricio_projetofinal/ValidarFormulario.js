function validarFormulario() {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    if (!nome || !email || !senha) {
        alert("Todos os campos devem ser preenchidos!");
        return false;
    }

    if (!email.includes('@')) {
        alert("Por favor, insira um e-mail válido.");
        return false;
    }

    if (senha.length < 6) {
        alert("A senha deve ter pelo menos 6 caracteres.");
        return false;
    }

    alert("Cadastro realizado com sucesso!");
    return true;
}
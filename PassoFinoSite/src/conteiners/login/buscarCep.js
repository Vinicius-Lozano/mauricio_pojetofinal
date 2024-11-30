function buscarCEP() {
    const cep = document.getElementById('cep').value;

    if (cep.length === 8) {
        fetch('https>://viacep.com.br/ws/${cep}/json/')
        .then(Response => Response.json())
        .then(data => {
            if (!data.erro) {
                document.getElementById('endereco').value = '${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}';
            } else {
                alert("CEP não encontrado.");
            }
        })
        .catch(() => alert("Erro ao buscar o CEP. Tente Novamente."));
    } else {
        alert("Digite um CEP válido com 8 dígitos.");
    }
}
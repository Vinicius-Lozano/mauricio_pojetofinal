
function adicionarAoCarrinho(idProduto, nomeProduto, precoProduto, imagemProduto) {
    
    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    
    const produto = {
        id: idProduto,
        nome: nomeProduto,
        preco: precoProduto,
        imagem: imagemProduto,
        quantidade: 1
    };

    
    const produtoExistente = carrinho.find(item => item.id === idProduto);

    if (produtoExistente) {
        
        produtoExistente.quantidade += 1;
    } else {
        
        carrinho.push(produto);
    }

    
    localStorage.setItem("carrinho", JSON.stringify(carrinho));

    
    atualizarCarrinhoNaNavbar();
}


function atualizarCarrinhoNaNavbar() {
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    const numeroItens = carrinho.reduce((total, item) => total + item.quantidade, 0);
    document.getElementById("numeroCarrinho").textContent = numeroItens; 
}


function exibirCarrinho() {
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    const itensCarrinho = document.getElementById("itensCarrinho");
    const totalElement = document.getElementById("total");

    
    itensCarrinho.innerHTML = "";

    let total = 0;

    
    carrinho.forEach(produto => {
        const divProduto = document.createElement("div");
        divProduto.classList.add("produto");

        divProduto.innerHTML = `
            <img src="${produto.imagem}" alt="${produto.nome}">
            <h2>${produto.nome}</h2>
            <p><strong>R$ ${produto.preco.toFixed(2).replace('.', ',')}</strong></p>
            <p>Quantidade: ${produto.quantidade}</p>
            <p><strong>Total: R$ ${(produto.preco * produto.quantidade).toFixed(2).replace('.', ',')}</strong></p>
        `;

        itensCarrinho.appendChild(divProduto);

        
        total += produto.preco * produto.quantidade;
    });

    
    totalElement.textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;
}


window.onload = function() {
    atualizarCarrinhoNaNavbar();
    exibirCarrinho();
};
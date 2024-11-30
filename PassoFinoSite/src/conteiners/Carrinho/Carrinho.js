let carrinho = [];


function AdicionarAoCarrinho(idProduto) {
    
    const produto = {
        id: idProduto,
        nome: "Nome do Produto", 
        preco: 50, 
        quantidade: 1 
    };

    
    carrinho.push(produto);

    
    console.log("Carrinho:", carrinho);
    
    
    atualizarCarrinho();
}

function atualizarCarrinho() {
    
    const numeroItens = carrinho.length;
    console.log(`Você tem ${numeroItens} item(s) no carrinho`);
    
}

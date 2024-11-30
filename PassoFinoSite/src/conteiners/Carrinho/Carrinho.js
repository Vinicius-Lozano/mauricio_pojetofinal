let carrinho = [];

function adicionarAoCarrinho(idProduto, nome, preco) {
    const itemExistente = carrinho.find(item => item.id === idProduto);

    if (itemExistente) {
        itemExistente.quantidade++;
    } else {
        carrinho.push({id: idProduto, nome: nome, preco: preco, quantidade: 1});
    }

    atualizarCarrinho();
    alert('${nome} foi adicionado ao carrinho.');
}

function atualizarCarrinho() {
    const carrinhoContainer = document.getElementById('carrinho');
    const totalContainer = document.getElementById('total');

    if (!carrinhoContainer || !totalContainer) return;

    carrinhoContainer.innerHTML = '';

    let total = 0;

    carrinho.forEach(item => {
        total += item.preco * item.quantidade;

        carrinhoContainer.innerHTML += `
            <div>
                <span>${item.nome} (x${item.quantidade})</span>
                <span>R$ ${(item.preco * item.quantidade).toFixed(2)}</span>
                <button onclick="removerDoCarrinho(${item.id})">Remover</button>
            </div>
        `;
    });

    totalContainer.textContent = `R$ ${total.toFixed(2)}`;
}

function removerDoCarrinho(idProduto) {
    carrinho = carrinho.filter(item => item.id !== idProduto);
    atualizarCarrinho();
}

function finalizarCompra() {
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    const resumo = carrinho.map(item => `${item.nome} x${item.quantidade}`).join("\n");
    const total = carrinho.reduce((acc, item) => acc + item.preco * item.quantidade, 0);

    alert(`Resumo da compra:\n${resumo}\n\nTotal: R$ ${total.toFixed(2)}`);
    carrinho = []; 
    atualizarCarrinho();
}
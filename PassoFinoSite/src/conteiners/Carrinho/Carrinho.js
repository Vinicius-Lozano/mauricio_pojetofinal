let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

function adicionarAoCarrinho(idProduto, nome, preco) {
    const itemExistente = carrinho.find(item => item.id === idProduto);

    if (itemExistente) {
        itemExistente.quantidade++;
    } else {
        carrinho.push({id: idProduto, nome: nome, preco: preco, quantidade: 1});
    }

    salvarCarrinho();
    atualizarCarrinho();
    alert('${nome} foi adicionado ao carrinho')
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
    salvarCarrinho();
    atualizarCarrinho();
}

function salvarCarrinho() {
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
}

function finalizarCompra() {
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    const resumo = carrinho.map(item => `${item.nome} x${item.quantidade}`).join("\n");
    const total = carrinho.reduce((acc, item) => acc + item.preco * item.quantidade, 0);

    fetch("php/finalizar_compra.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ carrinho })
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert(`Compra finalizada com sucesso!\nResumo:\n${resumo}\n\nTotal: R$ ${total.toFixed(2)}`);
                carrinho = [];
                salvarCarrinho();
                atualizarCarrinho();
            } else {
                alert("Houve um problema ao finalizar a compra. Tente novamente.");
            }
        })
        .catch(error => {
            console.error("Erro ao finalizar a compra:", error);
            alert("Erro ao finalizar a compra. Verifique sua conexão e tente novamente.");
        });
}
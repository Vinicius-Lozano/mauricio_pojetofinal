function finalizarCompra() {
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    fetch("php/finalizar_compra.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            cliente_id: 1,
            carrinho: carrinho
        })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        carrinho = [];
        localStorage.removeItem("carrinho");
        exibirCarrinho();
    })
    .catch(error => console.error("Erro ao finalizar a compra:", error));
}

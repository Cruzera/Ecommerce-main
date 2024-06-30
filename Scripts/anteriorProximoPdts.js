function anterior(produtosId) {
    const produtos = document.getElementById(produtosId);
    const largura = produtos.clientWidth;
    produtos.scrollBy({ left: -largura, behavior: 'smooth', duration: 500});
}

function proximo(produtosId) {
    const produtos = document.getElementById(produtosId);
    const largura = produtos.clientWidth;
    produtos.scrollBy({ left: largura, behavior: 'smooth', duration: 500});
}
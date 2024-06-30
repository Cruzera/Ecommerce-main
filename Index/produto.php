<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/produto.css">
</head>
<body>
    <?php include_once('Header.php');?>
    <main>
        <div class="content">
            <div class="produto">
                <div class="imgProdutoAutor">
                    <div class="exibicaoImg">
                        <div class="selecionaImg">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                            <img class="imgProduto">
                        </div>
                        <img class="exibeImg">
                    </div>
                    <div class="TACO">
                        <span class="whitespace"></span>
                        <div class="divAutor">
                            <h2 class="tituloAutor">Autor:</h2>
                            <div class="perfil">
                                <img class="imgPerfil">
                                <a class="nomePerfil" href="perfil.php">Usuário</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divInformacoes">
                    <div class="informacoes">
                        <h1>Produto</h1>
                        <div class="avaliacoes">
                            <label class="lblAvaliacoes">3.5</label>
                            <div class="estrelas">
                                <img src="../Icones/EstrelaCheia.svg">
                                <img src="../Icones/EstrelaCheia.svg">
                                <img src="../Icones/EstrelaCheia.svg">
                                <img src="../Icones/EstrelaMeia.svg">
                                <img src="../Icones/EstrelaVazia.svg">
                            </div>
                            <label class="lblAvaliacoes">28 avaliações</label>
                        </div>
                        <div class="preco">
                            <label class="precoOriginal">R$00,00</label>
                            <div class="divPromocao">
                                <label class="precoAtual">R$00,00</label>
                                <label class="desconto">0% off</label>
                            </div>
                            <label class="parcela">em 12x sem juros</label>
                        </div>
                        <div class="favoritarCompartilhar">
                            <div class="favoritar">
                                <input id="idCheckbox" class="checkFavoritar" type="checkbox">
                                <label for="idCheckbox">
                                    <img src="../Icones/FavoritarVazio.svg" alt="Ícone Favoritar">
                                </label>
                            </div>
                            <button class="btnIcone" type="button"><?php include('../Icones/Compartilhar.svg'); ?></button>
                        </div>
                        <label class="descricaoProduto">Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto Produto</label>
                        <label class="categoriasProduto">Eletrônicos, Acessórios</label>
                        <div class="divSelecionar">
                            <h1 class="tituloSelecionar">Tipo:</h1>
                            <div class="tipos">
                                <img class="imgTipo">
                                <img class="imgTipo">
                                <img class="imgTipo">
                                <img class="imgTipo">
                                <img class="imgTipo">
                            </div>
                        </div>
                        <div class="divSelecionar">
                            <h1 class="tituloSelecionar">Quantidade:</h1>
                            <label class="quantidade"><?php include("seletorQtd.php"); ?> 0 disponíveis</label>
                        </div>
                        <div class="divBtn">
                            <button class="btnIcone2nd"><?php include_once('../Icones/AdicionarCarrinho.svg'); ?>Adicionar ao carrinho</button>
                            <button class="btnIcone1st" onclick="location.href='compra.php'"><?php include_once('../Icones/Compra.svg'); ?>Comprar agora</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="avaliacoesComentarios">
                <h1 class="tituloAvaliacoes">Avaliações (28)</h1>
                <div class="CALDINHO_DE_CANA">
                    <div class="pontosAvaliacoes">
                        <h1 class="pontos">3.5</h1>
                        <div class="estrelas">
                                <img src="../Icones/EstrelaCheia.svg">
                                <img src="../Icones/EstrelaCheia.svg">
                                <img src="../Icones/EstrelaCheia.svg">
                                <img src="../Icones/EstrelaMeia.svg">
                                <img src="../Icones/EstrelaVazia.svg">
                        </div>
                    </div>
                    <div class="graficoAvaliacoes">
                        <div class="graficoAvaliacao">
                            <h1 class="lblNumEstrelas">1</h1>
                            <div class="barraAvaliacao">
                                <div class="qtdBarraAvaliacao" style="width: 0%"></div>
                            </div>
                            <label class="qtdAvaliacao">0</label>
                        </div>
                        <div class="graficoAvaliacao">
                            <h1 class="lblNumEstrelas">2</h1>
                            <div class="barraAvaliacao">
                                <div class="qtdBarraAvaliacao" style="width: 42.86%"></div>
                            </div>
                            <label class="qtdAvaliacao">12</label>
                        </div>
                        <div class="graficoAvaliacao">
                            <h1 class="lblNumEstrelas">3</h1>
                            <div class="barraAvaliacao">
                                <div class="qtdBarraAvaliacao" style="width: 7.14%"></div>
                            </div>
                            <label class="qtdAvaliacao">2</label>
                        </div>
                        <div class="graficoAvaliacao">
                            <h1 class="lblNumEstrelas">4</h1>
                            <div class="barraAvaliacao">
                                <div class="qtdBarraAvaliacao" style="width: 7.14%"></div>
                            </div>
                            <label class="qtdAvaliacao">2</label>
                        </div>
                        <div class="graficoAvaliacao">
                            <h1 class="lblNumEstrelas">5</h1>
                            <div class="barraAvaliacao">
                                <div class="qtdBarraAvaliacao" style="width: 42.86%"></div>
                            </div>
                            <label class="qtdAvaliacao">12</label>
                        </div>
                    </div>
                </div>
                <div class="comentarios">
                    <?php include("comentario.php"); ?>
                    <?php include("comentario.php"); ?>
                    <?php include("comentario.php"); ?>
                </div>
                <button class="btnVerMais" type="button" onclick="location.href='index.php'">Ver mais</button>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
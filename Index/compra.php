<?php
$produtos = [
    ["nome" => "produto1", "preco" => 10.00, "tipo" => "Preto", "quantidade" => 5],
    ["nome" => "produto2", "preco" => 20.00, "tipo" => "Preto", "quantidade" => 2],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3],
    ["nome" => "produto3", "preco" => 15.50, "tipo" => "Preto", "quantidade" => 3]
];
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/compra.css">
    <script src="../Scripts/mostrarConteudo.js"></script>
</head>
<body>
    <?php include_once('Header.php');?>
    <main>
        <div class="content">
            <h1>Compra</h1>
            <div class="containers">
                <div class="dados">
                    <div class="containerDados">
                        <div class="etapa">
                            <h1 class="tituloEtapa">Destinatário</h1>
                            <div class="campos">
                                <div class="campo">
                                    <label class="lblCampo">Nome do destinatário:</label>
                                    <input class="txtCampo HOTDOG" type="text" placeholder="Nome">
                                </div>
                                <div class="campo">
                                    <label class="lblCampo">Número de celular:</label>
                                    <input class="txtCampo HOTDOG" type="number" placeholder="Celular">
                                </div>
                            </div>
                        </div>
                        <div class="etapa">
                            <h1 class="tituloEtapa">Endereço</h1>
                            <div class="separaCampos">
                                <div class="campos">
                                    <div class="campo">
                                        <label class="lblCampo">CEP:</label>
                                        <input class="txtCampo" type="number" placeholder="CEP">
                                    </div>
                                    <div class="campo">
                                        <label class="lblCampo">País:</label>
                                        <select class="txtCampo" type="text">
                                            <option value="Selecione um País">Selecione um País</option>
                                            <option value="Brasil">Brasil</option>
                                        </select>
                                    </div>
                                    <div class="campo">
                                        <label class="lblCampo">Estado:</label>
                                        <select class="txtCampo" type="text">
                                            <option value="Selecione um Estado">Selecione um Estado</option>
                                            <option value="São Paulo">São Paulo</option>
                                        </select>
                                    </div>
                                    <div class="campo">
                                        <label class="lblCampo">Município:</label>
                                        <select class="txtCampo" type="text">
                                            <option value="Selecione um Município">Selecione um Município</option>
                                            <option value="Sorocaba">Sorocaba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="campos">
                                    <div class="campo">
                                        <label class="lblCampo">Bairro:</label>
                                        <input class="txtCampo" type="text" placeholder="Bairro">
                                    </div>
                                    <div class="campo">
                                        <label class="lblCampo">Endereço:</label>
                                        <input class="txtCampo" type="text" placeholder="Endereço">
                                    </div>
                                    <div class="campo">
                                        <label class="lblCampo">Número:</label>
                                        <input class="txtCampo" type="number" placeholder="Número">
                                    </div>
                                    <div class="campo">
                                        <label class="lblCampo">Complemento:</label>
                                        <input class="txtCampo" type="text" placeholder="Complemento">
                                    </div>
                                </div>
                            </div>
                            <div class="etapa">
                                <h1 class="tituloEtapa">Endereço</h1>
                                <div class="campos">
                                    <div class="campo">
                                        <label class="lblCampo">CPF:</label>
                                        <input class="txtCampo HOTDOG" type="number" placeholder="CPF">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="containerDados">
                        <h1 class="tituloEtapa">Forma de pagamento</h1>
                        <div class="campos">
                            <div class="dadosPagamento">
                                <div class="campo">
                                    <input type="radio" id="pix" name="formaPagamento" value="Pix" data-target="detalhesPix">
                                    <label class="lblCampo" for="pix"><?php include('../Icones/Pix.svg'); ?>Pix</label>
                                </div>
                                <div id="detalhesPix" class="detalhesPagamento">
                                    <label class="info"><?php include('../Icones/Info.svg'); ?>O código Pix gerado para o pagamento é válido por 30 minutos após a finalização do pedido.</label>
                                </div>
                            </div>

                            <div class="dadosPagamento">
                                <div class="campo">
                                    <input type="radio" id="cartao" name="formaPagamento" value="Adicionar cartão" data-target="detalhesCartao">
                                    <label class="lblCampo" for="cartao"><?php include('../Icones/Cartao.svg'); ?>Adicionar cartão</label>
                                </div>
                                <div id="detalhesCartao" class="detalhesPagamento">
                                    <div class="separaCampos">
                                        <div class="campos">
                                            <div class="campo">
                                                <label class="lblCampo">Número do cartão:</label>
                                                <input class="txtCampo" type="text" placeholder="XXXX XXXX XXXX XXXX">
                                            </div>
                                            <div class="campo">
                                                <label class="lblCampo">Validade:</label>
                                                <input class="txtCampo" type="text" placeholder="mm/yy">
                                            </div>
                                        </div>
                                        <div class="campos">
                                            <div class="campo">
                                                <label class="lblCampo">Titular:</label>
                                                <input class="txtCampo" type="text" placeholder="Titular">
                                            </div>
                                            <div class="campo">
                                                <label class="lblCampo">Código de segurança:</label>
                                                <input class="txtCampo" type="number" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="salvarCartao">
                                        <div class="checkSalvarCartao">
                                            <input class="checkbox" type="checkbox" id="checkbox1" data-target="detalhes1">
                                            <label class="lblCampo" for="checkbox1">Salvar cartão</label>
                                        </div>
                                        <div id="detalhes1" class="detalhesSalvarCartao">
                                            <div class="campo">
                                                <label class="lblCampo">Apelido do cartão:</label>
                                                <input class="txtCampo HOTDOG" type="text" placeholder="Apelido">
                                            </div>
                                            <button class="btn1st2" onclick="location.href='compra.php'">Salvar cartão</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dadosPagamento">
                                <div class="campo">
                                    <input type="radio" id="boleto" name="formaPagamento" value="Boleto" data-target="detalhesBoleto">
                                    <label class="lblCampo" for="boleto"><?php include('../Icones/Boleto.svg'); ?>Boleto</label>
                                </div>
                                <div id="detalhesBoleto" class="detalhesPagamento">
                                    <label class="info"><?php include('../Icones/Info.svg'); ?>Vencimento em 1 dia útil. A data de entrega será alterada devido ao tempo de processamento do Boleto.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="containerDados">
                    <h1 class="tituloEtapa">Resumo da compra</h1>
                    <div class="produtos">
                    <?php foreach ($produtos as $produto) {
                        $nome = $produto['nome'];
                        $preco = $produto['preco'];
                        $tipo = $produto['tipo'];
                        $quantidade = $produto['quantidade'];
                        $total += $quantidade * $preco;
                        ?>
                        <div class="produto">
                            <label class="qtd"><?php echo $quantidade; ?>x</label>
                            <img class="imgProduto">
                            <div class="divInfo">
                                <h1 class="nomeProduto"><?php echo $nome; ?></h1>
                                <div class="informacoes">
                                    <label class="informacao"><b>Total:</b>R$<?php echo number_format($quantidade * $preco, 2, ',', '.'); ?></label>
                                    <label class="informacao"><b>Tipo:</b><?php echo $tipo; ?></label>
                                    <label class="informacao"><b>Quantidade:</b><?php echo $quantidade; ?></label>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                    </div>
                </div>
                <div class="containerCompra">
                    <h1 class="tituloEtapa">Valores</h1>
                    <div class="campos">
                        <div class="valores">
                            <label class="lblCampo">Subtotal:</label>
                            <label class="lblCampo">R$00,00</label>
                        </div>
                        <div class="valores">
                            <label class="lblCampo">Frete:</label>
                            <label class="lblCampo">R$00,00</label>
                        </div>
                        <div class="valores">
                            <label class="lblCampo">Impostos:</label>
                            <label class="lblCampo">R$00,00</label>
                        </div>
                        <div class="valores">
                            <label class="lblCampo">Cupom:</label>
                            <label class="lblCampo">-R$00,00</label>
                        </div>
                        <a class="cupom">Adicionar cupom</a>
                    </div>
                    <div class="valores">
                        <h1 class="tituloTotal">Total:</h1>
                        <label class="lblTotal">R$00,00</label>
                    </div>
                    <div class="btnCompra">
                        <button class="btnIcone1st" onclick="location.href='compra.php'"><?php include_once('../Icones/Compra.svg'); ?>Finalizar compra</button>
                    </div>
                    <label class="obs">Ao clicar em "Finalizar compra", eu afirmo que li e estou de acordo com os <a class="termosCondicoes">termos e condições de uso</a>.</label>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
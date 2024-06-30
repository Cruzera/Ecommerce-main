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
    <title>Carrinho - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/carrinho.css">
</head>
<body>
    <?php include_once('Header.php');?>
    <main>
        <div class="content">
            <h1 class="titulo">Carrinho</h1>
            <div class="info">
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
                            <img class="imgProduto" onclick="location.href='produto.php'">
                            <div class="divInfo">
                                <div class="nomeRemover">
                                    <h1 class="nomeProduto" onclick="location.href='produto.php'"><?php echo $nome; ?></h1>
                                    <button class="btnIcone" type="button"><?php include('../Icones/Remover.svg'); ?></button>
                                </div>
                                <div class="informacoes">
                                    <label class="informacao"><b>Total:</b>R$<?php echo number_format($quantidade * $preco, 2, ',', '.'); ?></label>
                                    <label class="informacao"><b>Tipo:</b><?php echo $tipo; ?></label>
                                    <label class="informacao"><b>Quantidade:</b><?php include("seletorQtd.php"); ?><?php echo $quantidade; ?> disponíveis</label>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="compra">
                    <label class="preco"><b>Total: </b>R$<?php echo number_format($total, 2, ',', '.'); ?></label>
                    <button class="btnIcone1st" onclick="location.href='compra.php'"><?php include_once('../Icones/Compra.svg'); ?>Fechar compra</button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
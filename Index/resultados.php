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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/resultados.css">
</head>
<body>
    <?php include_once('Header.php');?>
    <main>
        <div class="content">
            <h2 class="titulo">Mostrando resultados para "".</h2>
            <div class="produtos">
                <?php foreach ($produtos as $produto) {
                    $nome = $produto['nome'];
                    $preco = $produto['preco'];
                    include("btnProduto.php");
                } ?>
            </div>
            <div class="selecionaPagina">
                <button class="btnIcone" type="button"><?php include('../Icones/SetaEsquerda.svg'); ?></button>
                <span class="numPagina">1</span>
                <span class="numPagina">2</span>
                <span class="numPagina">3</span>
                <span class="numPagina">4</span>
                <span class="numPagina">5</span>
                <span class="numPagina">...</span>
                <button class="btnIcone" type="button"><?php include('../Icones/SetaDireita.svg'); ?></button>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
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
    <title>Perfil - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/perfil.css">
</head>
<body>
    <?php include_once('Header.php');?>
    <main>
        <div class="content">
            <div class="perfilInfo">
                <img class="imgPerfil">
                <h1 class="nomePerfil">Usuário</h1>
                <button class="btnDesativar" type="button" onclick="">Seguir</button>
            </div>
            <div class="produtosPerfil">
                <div class="tituloPesquisa">
                    <h1 class="titulo">Produtos</h1>
                    <div class="barraPesquisaPerfil">
                        <input class="txtBarraPesquisaPerfil" type="text" id="searchId" placeholder="Procure pelo seu produto...">
                        <button class="btnBarraPesquisaPerfil" type="button" onclick="location.href='resultados.php'"><?php include('../Icones/Pesquisar.svg'); ?></button>
                    </div>
                </div>
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
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
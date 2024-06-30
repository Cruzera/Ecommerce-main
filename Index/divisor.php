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

<link rel="stylesheet" href="../Styles/divisor.css">
<script src="../Scripts/anteriorProximoPdts.js"></script>
<div class="divisor">
    <h2 class="classificacao"><?php echo $classificacao ?></h2>
    <div class="PIZZA">
        <button class="btnIcone" onclick="anterior('produtos<?php echo $id ?>')" type="button"><?php include('../Icones/SetaEsquerda.svg'); ?></button>
        <div class="produtos" id="produtos<?php echo $id ?>">
            <?php foreach ($produtos as $produto) {
                $nome = $produto['nome'];
                $preco = $produto['preco'];
                include("btnProduto.php");
            } ?>
        </div>
        <button class="btnIcone" onclick="proximo('produtos<?php echo $id ?>')" type="button"><?php include('../Icones/SetaDireita.svg'); ?></button>
    </div>
</div>
<link rel="stylesheet" href="../Styles/btnProduto.css">
<div class="produto" onclick="location.href='produto.php'">
    <img class="imgProduto">
    <div class="nomePreco">
        <h1 class="nomeProduto"><?php echo $nome; ?></h1>
        <label class="precoProduto">R$<?php echo number_format($preco, 2, ',', '.'); ?></label>
    </div>
</div>
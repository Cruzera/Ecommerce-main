<?php
$categorias = [
    ["nome" => "Eletrônicos"],
    ["nome" => "Livros"],
    ["nome" => "Esporte"],
    ["nome" => "Casa e Jardim"],
    ["nome" => "Beleza"],
    ["nome" => "Roupas"],
    ["nome" => "Acessórios"]
];
?>

<link rel="stylesheet" href="../Styles/header.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Armata">
<header>
    <div class="headerPrincipal">
        <img class="imgLogo" src="../Imagens/AstrotecLogo.png" onclick="location.href='index.php'">
        <div class="divBotoes">
            <div class="barraPesquisa">
                <input class="txtBarraPesquisa" type="text" placeholder="Procure pelo seu produto...">
                <button class="btnBarraPesquisa" type="button" onclick="location.href='resultados.php'"><?php include('../Icones/Pesquisar.svg'); ?></button>
            </div>
            <button class="btnNotification" onclick="location.href='carrinho.php'">
                <?php include_once('../Icones/Carrinho.svg'); ?>
                <span class="pdtsNumero" id='idPdtsNumero'>8</span>
            </button>
            <button class="btn1st" type="button" onclick="location.href='login.php'">Login</button>
        </div>
    </div>
    <div class="headerCategorias">
        <?php foreach ($categorias as $categoria) {
            $nome = $categoria['nome'];
            ?>
            <button class="btnCategoria" onclick="location.href='resultados.php'"><?php echo $nome; ?></button>
        <?php } ?>
        <button class="btnCategoria" id="btnTodos"><?php include_once('../Icones/List.svg'); ?>Todos</button>
    </div>
</header>
<?php include_once('menuLateral.php');?>
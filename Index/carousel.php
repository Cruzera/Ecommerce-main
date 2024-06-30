<link rel="stylesheet" href="../Styles/carousel.css">
<script src="../Scripts/carousel.js"></script>
<div class="carousel">
    <div class="slides" id="slides<?php echo $id ?>">
        <div class="slide">
            <img src="../Imagens/Promocao1.png" alt="Image 1">
        </div>
        <div class="slide">
            <img src="../Imagens/Promocao2.png" alt="Image 2">
        </div>
        <div class="slide">
            <img src="../Imagens/Promocao3.png" alt="Image 3">
        </div>
    </div>
    <button class="btnAnterior" onclick="anteriorCarousel('slides<?php echo $id ?>')" type="button"></button>
    <button class="btnProximo" onclick="proximoCarousel('slides<?php echo $id ?>')" type="button"></button>
    <!--
    <div class="navegacao">
        <span class="dot" onclick="navegar(0)"></span>
        <span class="dot" onclick="navegar(1)"></span>
        <span class="dot" onclick="navegar(2)"></span>
    </div>
    -->
</div>
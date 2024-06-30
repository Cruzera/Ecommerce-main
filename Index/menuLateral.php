<link rel="stylesheet" href="../Styles/menuLateral.css">
<div class="overlay" id="overlay">
    <div class="menuLateral">
        <h1 class="tituloMenu">Categorias</h1>
        <div class="categorias">
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Destaques</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Mais Vendidos</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Promoção</a>
                </div>
            </div>
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Eletrônicos</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Computador</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Celular</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Jogos</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Cozinha</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Casa Inteligente</a>
                </div>
            </div>
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Livros</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Educacionais</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Infantis</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Mangás</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">História</a>
                </div>
            </div>
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Esporte</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Musculação</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Corrida</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Futebol</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Basquete</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Vôlei</a>
                </div>
            </div>
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Casa e Jardim</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Vasos de Flor</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Decoração</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Plantas</a>
                </div>
            </div>
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Beleza</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Cabelo</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Maquiagem</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Rosto</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Esmaltes</a>
                </div>
            </div>
            <div class="divCategoria">
                <a class="categoria" onclick="location.href='resultados.php'">Roupas</a>
                <div class="divSubcategoria">
                    <a class="subcategoria" onclick="location.href='resultados.php'">Masculinas</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Femininas</a>
                    <a class="subcategoria" onclick="location.href='resultados.php'">Infantis</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btnTodos').addEventListener('click', function() {
        document.getElementById('overlay').style.display = 'flex';
    });

    document.getElementById('overlay').addEventListener('click', function() {
        this.style.display = 'none';
    });
</script>
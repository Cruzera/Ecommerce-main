<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/login.css">
</head>
<body>
    <main>
        <div class="content">
            <a class="voltarInicio" href="index.php"><?php include('../Icones/SetaEsquerda.svg'); ?>Início</a>
            <div class="boxCadastro">
                <h1>Cadastro</h1>
                <div class="divTxt">
                    <div class="campo">
                        <h2 class="lblCampo">Nome:</h2>
                        <input class="txtCampo" type="text" placeholder="Nome" required>
                    </div>
                    <div class="campo">
                        <h2 class="lblCampo">Sobrenome:</h2>
                        <input class="txtCampo" type="text" placeholder="Sobrenome" required>
                    </div>
                    <div class="campo">
                        <h2 class="lblCampo">Email:</h2>
                        <input class="txtCampo" type="text" placeholder="email@address.com" required>
                    </div>
                    <div class="divCampos">
                        <div class="campo">
                            <h2 class="lblCampo">Senha:</h2>
                            <input class="txtCampo" type="password" placeholder="******" required>
                        </div>
                        <div class="campo">
                            <h2 class="lblCampo">Confirme senha:</h2>
                            <input class="txtCampo" type="password" placeholder="******" required>
                        </div>
                    </div>
                    <div class="divCampos">
                        <div class="campo">
                            <h2 class="lblCampo">Data de Nascimento:</h2>
                            <input class="txtCampo" type="date" required>
                        </div>
                        <div class="campo">   
                        </div>
                    </div>
                </div>
                <div class="divBtn">
                    <a class="btn2nd" href="login.php">Login</a>
                    <button class="btn1st" type="button" onclick="location.href='index.php'">Cadastrar</button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
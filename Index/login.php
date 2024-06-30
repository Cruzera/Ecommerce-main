<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/login.css">
</head>
<body>
    <main>
        <div class="content">
            <a class="voltarInicio" href="index.php"><?php include('../Icones/SetaEsquerda.svg'); ?>Início</a>
            <div class="boxLogin">
                <h1>Login</h1>
                <div class="divTxt">
                    <div class="campo">
                        <h2 class="lblCampo">Email:</h2>
                        <input class="txtCampo" type="text" placeholder="email@address.com" required>
                    </div>
                    <div class="campo">
                        <h2 class="lblCampo">Senha:</h2>
                        <input class="txtCampo" type="password" placeholder="******" required>
                    </div>
                    <a class="esqueciSenha" href="redefinirSenha.php">Esqueci a senha</a>
                    <div class="checkConectado">
                        <input class="checkbox" type="checkbox" id="idCheckbox">
                        <label for="idCheckbox">Manter-me conectado</label>
                    </div>
                </div>
                <div class="divBtn">
                    <a class="btn2nd" href="cadastro.php">Cadastro</a>
                    <button class="btn1st" type="button" onclick="location.href='index.php'">Login</button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/login.css">
</head>
<body>
    <main>
        <div class="content">
            <a class="voltarInicio" href="index.php"><?php include('../Icones/SetaEsquerda.svg'); ?>Início</a>
            <div class="boxRedefinir">
                <h1>Redefinir Senha</h1>
                <div class="divTxt">
                    <div class="campo">
                        <h2 class="lblCampo">Email:</h2>
                        <input class="txtCampo" type="text" placeholder="email@address.com" required>
                    </div>
                </div>
                <div class="divBtn">
                    <a class="btn2nd" href="login.php">Voltar</a>
                    <button class="btn1st" type="button" onclick="">Prosseguir</button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
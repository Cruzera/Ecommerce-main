<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Astrotec</title>
    <link rel="stylesheet" href="../Styles/utilidades.css">
    <link rel="stylesheet" href="../Styles/index.css">
</head>
<body>
    <?php include_once('Header.php');?>
    <main>
        <div class="content">
            <?php $id = 1; include("carousel.php"); ?>
            <?php $id = 1; $classificacao ="Mais vendidos"; include("divisor.php"); ?>
            <?php $id = 2; include("carousel.php"); ?>
            <?php $id = 2; $classificacao ="Promoção"; include("divisor.php"); ?>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
</html>
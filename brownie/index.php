<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Miguel">
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="imagens/site.webmanifest">
    <link rel="stylesheet" href="estilo.css">
    <title>Idade do Brownie</title>
</head>
<body>
    <header>
        <h1>Brownie!!!</h1>
    </header>
    <main>
        <?php
            // Criando diferença de datas com funções;
            $niver = date_create_from_format("d/m/Y", "31/12/2021");
            $dif = (array) date_diff($niver, date_create());

            // Colocando na tela em anos, meses, semanas, dias;
            echo
            "<p>Anos: <span>" . $dif["y"] . "</span></p>" .
            "<p>Meses: <span>" . $dif["m"] . "</span></p>" .
            "<p>Dias: <span>" . $dif["d"] . "</span></p>";
        ?>
    </main>
</body>
<script>
    document.querySelector(".disclaimer").style.opacity = 0;
</script>
</html>
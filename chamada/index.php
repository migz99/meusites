<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Miguel"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Chamada</title>
</head>
<body>
    <header>
        <h1>Chamada</h1>
    </header>
    <section>
        <form method="POST" action="resultado.php">
            <?php
                $db = new mysqli("localhost", "id14950473_dalahanx", "Miguel100605!", "id14950473_database");

                $i = 0;
                $query = $db->query("SELECT nome FROM `info1D` ORDER BY nome");
                while ($row = $query->fetch_assoc()) {
                    echo "<input type='checkbox' name='a$i' id='{$row["nome"]}'>\n";
                    echo "<label for='{$row["nome"]}'>{$row["nome"]}</label>\n";
                    echo "<br/>\n";
                    $i++;
                }
                $db->close();
            ?>
            <br/>
            <input name="totAlunos" type="number" value="<?php echo $i++; ?>" hidden/>
            <input type="submit" value="SUBMIT"/>
        </form>
    </section>
    <footer>
        &copy; Miguel
    </footer>
</body>
</html>
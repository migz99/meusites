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
    <section id="res">
        <?php
            $db = new mysqli("localhost", "id14950473_dalahanx", "Miguel100605!", "id14950473_database");
            $alunosCheck = array();
            $alunos = array();

            $totAlunos = $_POST["totAlunos"];
            for ($i = 0; $i < $totAlunos; $i++) {
                $alunosCheck[$i] = $_POST["a$i"] ?? "off";
            }  

            $result = $db->query("SELECT nome FROM `info1D` ORDER BY nome");
            while ($row = $result->fetch_assoc()) {
                array_push($alunos, $row["nome"]);
            }
        ?>
        <table id="presente">
            <thead>
                <th>PRESENTE <?php echo date("d/m"); ?></th>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < $totAlunos; $i++) {
                        if ($alunosCheck[$i] == "on") {
                            echo "<tr><td>{$alunos[$i]}</td></tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
        <table id="faltou">
            <thead>
                <th>FALTOU <?php echo date("d/m"); ?></th>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < $totAlunos; $i++) {
                        if (!($alunosCheck[$i] == "on")) {
                            echo "<tr><td>{$alunos[$i]}</td></tr>";
                        }
                    }
                    $db->close();
                ?>
            </tbody>
        </table>
    </section>
    <script src="script.js"></script>
    <footer>
        &copy; Miguel
    </footer>
</body>
</html>
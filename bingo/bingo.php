<!DOCTYPE HTML>
<html>
<head>
    <?php
        $col = $_POST["col"];
        $lin = $_POST["lin"];
        $minimo = $_POST["min"];
        $maximo = $_POST["max"];
        $corDeFundo = $_POST["corDeFundo"];
        $corDeClick = $_POST["corDeClick"];
        $arr = array();
        $ultimaKey = $lin * $col;
    ?>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Miguel"/>
    <link rel="icon" type="image/png" sizes="512x512" href="imagens/android-chrome-512x512.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="imagens/android-chrome-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png"/>
    <link rel="manifest" href="imagens/site.webmanifest"/>
    <link rel="stylesheet" href="css/bingo.css"/>
    <style>
        td {
            background: <?php echo $corDeFundo; ?>
        }
    </style>
    <title>BINGO</title>
</head>
<body>
    <?php
        $corDeFundo = str_split($corDeFundo);
    ?>
    <table>
        <caption>BINGO</caption>
        <tbody>
            <?php
                for ($i = 0; $i < $lin; $i++) {
                    echo "<tr>";
                    for ($x = 0; $x < $col; $x++) {
                        $num = rand($minimo, $maximo);
                        while (in_array($num, $arr)) {
                            $num = rand($minimo, $maximo);
                        }
                        echo "<td id='t$num' onclick='Clicado(this.id)'>";
                        echo "<span id='s$num'>" . $num . "</span>";
                        echo "</td>";
                        array_push($arr, $num);
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        const span = document.querySelectorAll("span")
        var x = 0
        var cliques = <?php echo $ultimaKey; ?> 
        function Checar() { 
            for (i = 0; i < span.length; i++) {
                if (span[i].innerHTML == "X") {
                    x += 1
                }
            }
            if ((cliques - x) == 0) {
                const bingo = new Audio("bingo-sound-effect.mp3")
                bingo.play()
                setTimeout(() => {
                    history.back()
                }, 1200)
            }
            x = 0
        }
        function Clicado(tdID) {
            const td = document.querySelector(`td#${tdID}`)
            const span = document.querySelector(`span#s${tdID.slice(1, 3)}`)
            span.innerHTML = "X"
            td.style.background = "<?php echo $corDeClick; ?>"
            var r = <?php echo hexdec("{$corDeClick[1]}{$corDeClick[2]}") . "\n"?>
            var g = <?php echo hexdec("{$corDeClick[3]}{$corDeClick[4]}") . "\n"?>
            var b = <?php echo hexdec("{$corDeClick[5]}{$corDeClick[6]}") . "\n"?>
            var arr = InverterCores(r, g, b)
            span.style.color = `rgb(${arr[0]}, ${arr[1]}, ${arr[2]})`
            Checar()
        }

        function InverterCores(r, g, b) {
            r = 255 - r
            g = 255 - g
            b = 255 - b
            const arr = new Array(r, g, b)
            return arr
        }

        for (i = 0; i < span.length; i++) {
            var r = <?php echo hexdec("{$corDeFundo[1]}{$corDeFundo[2]}") . "\n"?>
            var g = <?php echo hexdec("{$corDeFundo[3]}{$corDeFundo[4]}") . "\n"?>
            var b = <?php echo hexdec("{$corDeFundo[5]}{$corDeFundo[6]}") . "\n"?>
            var arr = InverterCores(r, g, b)
            span[i].style.color = `rgb(${arr[0]}, ${arr[1]}, ${arr[2]})`
        }
</script>
</body>
</html>
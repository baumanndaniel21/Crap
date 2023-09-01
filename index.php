<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles11.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        if (!isset($_COOKIE["ponto"])) {
            echo "Criando um cookie";
            setcookie("ponto", 0, time() + (86400 * 30)); // 86400 = 1 dia
        }
        if ($_REQUEST) {
            if ($_COOKIE["ponto"] == 0) {
                include './dados.php';
                if ($soma == 7 || $soma == 11) {
                    echo " <audio autoplay><source src=vitoria.mp3 type=audio/mpeg></audio>";
                    echo "</br>Você ganhou! :)";
                    echo "<a href=index.php>Novo jogo</a>";
                    setcookie("ponto", 0, time() + (86400 * 30)); // 86400 = 1 dia
                } elseif ($soma == 2 || $soma == 3 || $soma == 12) {
                    echo " <audio autoplay><source src=perdeu.mp3 type=audio/mpeg></audio>";
                    echo "</br>Craps!!! --- Você perdeu :(";
                    echo "<a href=index.php>Novo jogo</a>";
                    setcookie("ponto", 0, time() + (86400 * 30)); // 86400 = 1 dia
                } else {
                    echo "<br/>Você precisa tirar um $soma novamente para ganhar o jogo. Mas se cair o sete você perde tudo.";
                    setcookie("ponto", $soma, time() + (86400 * 30)); // 86400 = 1 dia
                }
            } else {
                include './dados.php';
                if ($soma == $_COOKIE["ponto"]) {
                    echo " <audio autoplay><source src=vitoria.mp3 type=audio/mpeg></audio>";
                    echo "</br>Você ganhou! :)";
                    echo "<a href=index.php>Novo jogo</a>";
                    setcookie("ponto", 0, time() + (86400 * 30)); // 86400 = 1 dia
                } elseif ($soma == 7) {
                    echo " <audio autoplay><source src=perdeu.mp3 type=audio/mpeg></audio>";
                    echo "</br>Craps!!! --- Você perdeu :(";
                    echo "<a href=index.php>Novo jogo</a>";
                    setcookie("ponto", 0, time() + (86400 * 30)); // 86400 = 1 dia
                } else {
                    echo "<br/>Você precisa tirar um " . $_COOKIE["ponto"] . " novamente "
                    . "para ganhar o jogo. Mas se cair o "
                    . "sete você perde tudo.";
                }
            }
        }
        ?>
        <form action="index.php" method="post">
            <input type="submit" name="dados" value="Lançar">
        </form>
    </body>
</html>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ler e exibir sucessor</title>
        </head>

        <body>
            <form method="$_GET">
                <label for="Inteiro">Digite um inteiro:</label>
                <input type="number" name="Inteiro" id="Inteiro" placeholder="ex: 12">
                <input type="submit" value="Mostrar sucessor">
            </form>

            <a href="LerInteiro_ExibirSucessor.php">Reload</a>


            <?php
                if(isset($_GET["Inteiro"])) {
                    $inteiro_digitado = $_GET["Inteiro"];

                    $sucessor = $inteiro_digitado + 1;
                    echo "<h2>O sucessor de $inteiro_digitado é: $sucessor</h2>";
                }
            ?>
        </body>
    </html>
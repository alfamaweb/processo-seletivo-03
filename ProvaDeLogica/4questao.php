<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Conversor de Fahrenheit para Celsius</title>
        </head>

        <body>

            <form action="">
                <label for="Valor">O valor em Fahrenheit:</label>
                <input type="text" name="Valor" id="Valor" placeholder="ex: 36">
                <input type="submit" value="Converter">
            </form>

            <a href="ConversorDeFahrenheitParaCelsius.php">Reload</a>
            <?php

                if(isset($_GET["Valor"])){
                    $valor_fahrenheit = $_GET["Valor"];
                    
                    $Celsius = 5/9;

                    $calc = $Celsius * ($valor_fahrenheit - 32);
                    echo "<h2>O resultado da conversão é = (ou ~=) $calc</h2>";
                }
            ?>
        </body>
    </html>
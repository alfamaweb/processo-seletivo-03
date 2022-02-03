<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Invertido de um número</title>
        </head>

        <body>
            <form method="$_GET">
                <label for="Numero">Digite um inteiro:</label>
                <input type="text" name="Numero" id="Numero" placeholder="ex: 12">
                <input type="submit" value="Mostrar invertido">
            </form>

            <a href="InvertidoDeUmNumero.php">Recarregar</a>


            <?php
              if(isset($_GET["Numero"])){
                  $valor = $_GET["Numero"];
                  inverter($valor);
              } 

              function inverter($input) {
                  $arrayInput = str_split($input);
                  $inverteInput = array_reverse($arrayInput);
                  echo implode('', $inverteInput); 
              }
            ?>
        </body>
    </html>
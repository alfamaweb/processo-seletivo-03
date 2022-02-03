<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mês equivalente ao número.</title>
        </head>
        <form action="">
            <label for="Mes">Digite o ano e o mês que você deseja saber os dias</label>
            <input type="text" name="Mes" id="Mes" placeholder="ex: 2022-01">
            <input type="submit" value="Descobrir dias do mês">
            
        </form>

        <body>
            <?php

                if(isset($_GET["Mes"])){
                    $mes_ano_pesquisado = $_GET["Mes"];

                    echo "<br>";
                    $mes = date('m', strtotime($mes_ano_pesquisado));
                    echo "O mês pesquisado foi: ". $mes. "<br>";

                    echo "<br>";
                    $ano = date('Y', strtotime($mes_ano_pesquisado));
                    echo "O ano pesquisado foi: ".$ano ."<br>";

                    echo "<br>";
                    $quantiade_de_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
                    echo "A quantidade de dias equivalente ao mês é de: ".$quantiade_de_dias;
                }
            ?>
        </body>
    </html>
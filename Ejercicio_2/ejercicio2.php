<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ejercicio 2</title>

    </head>
        <body>

            <h2>Jugador 1</h2>

                <?php 
                
                /*Randomizamos los 5 dados del jugador 1 y hacemos un contador para comparar el resultado*/

                    $player1 = 0;
                    for ($i = 0; $i < 5; $i++) { 
                        $dado = rand(1, 6);
                        $player1 = $player1 + $dado;
                        echo "<img src='./img/$dado.jpg'>";
                    }
                    
                ?>

            <h2>Jugador 2</h2>

                <?php 
                
                /*Randomizamos los 5 dados del jugador 2 y hacemos un contador para comparar el resultado*/

                    $player2 = 0;
                    for ($i = 0; $i < 5; $i++) { 
                        $dado = rand(1, 6);
                        $player2 = $player2 + $dado;
                        echo "<img src='./img/$dado.jpg'>";
                    }

                ?>

            <h2>Resultado</h2>

                <?php 
                
                /*Comparamos el resultado*/

                    if ($player1 > $player2) {

                        $winner = 1;

                    } else {

                        $winner = 2;

                    }

                    echo "<p>Contando los 5 dados, ha ganado el Jugador <b>$winner</b>.</p>"

                ?>

        </body>
</html>
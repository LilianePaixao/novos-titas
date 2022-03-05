<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- <link rel="stylesheet" href="/exercicio12/style.css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio14</title>
</head>

<body>
    <div>
        <h1> Exercício 14</h1>
        <p> Chico tem 1,50m e cresce 2 centímetros por
ano, enquanto Juca tem 1,10m e cresce 3
centímetros por ano. <br/>
Construir um algoritmos
que calcule e imprima quantos anos serão
necessários para que Juca seja maior que
Chico</p>
        <form action = "index.php" method="POST">
            
            <label for="numero"> Digite a altura de Juca em cm</label>
            <input type ="number" name ="numero" id="numero">

            <label for="numero1"> Digite a altura de Chico em cm:</label>
            <input type ="number" name ="numero1" id="numero1">

            <button type ="submit" class="enviar">enviar</button>

        </form>
        <?php
            if (isset($_POST['numero']) && $_POST['numero1'] ){
            
                $ano = 0;
                $juca = $_POST["numero"];
                $chico = $_POST["numero1"];

                while($chico >= $juca){
                //incrementa à idade de Chico;
                $chico += 2;
                //incrementa à idade de Juca
                $juca += 3;
                //conta mais um ano
                $ano++;
                }
            echo "Serão necessários $ano, para que Juca seja maior que Chico"; 
        } else
         
       ?>
    </div>
</body>
</html>

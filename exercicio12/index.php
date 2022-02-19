<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="/exercicio12/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio12</title>
</head>

<body>
    <div>
        <h1> Exercício 12</h1>
        <p> Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo a palavra sonho <br/>
SONHO <br/>
SONHO SONHO<br/>
SONHO SONHO SONHO<br/>
SONHO SONHO SONHO SONHO<br/></p>
        <form action = "/exercicio12/index.php" method="POST">
            
            <label for="numero"> Digite um número:</label>
            <input type ="number" name ="numero" id="numero">
            <button type ="submit" class="enviar">enviar</button>

        </form>
        <?php
            for ($i=1;$i <= $_POST["numero"];$i++){
                //qtde linhas
                                
                for ($c=$i; $c > 0;$c--){
                echo " SONHO";
                        }
            echo "<br/>";
            }                               
        ?>
    </div>
</body>
</html>

<!DOCTYPE>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/exercicio11/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio11</title>
</head>
<body>
    <div>
        <h1>Exercício 11</h1>
        <p>Criar um algoritmos que imprima a tabuada de um número</p>
        <form action = "/exercicio11/index.php" method="POST">
            
            <label for="numero"> Informe um número</label>
            <input type ="number" name ="numero">
            <input type ="submit" value = "enviar" class="enviar">          

        </form>
        <?php
            $numero = $_POST["numero"];
                if (isset($_POST[numero])){
                    for ($i=0;$i <= 10;$i++){
                        $resultado = $i * $numero;
                        echo " $numero  x  $i =  $resultado <br/>";
                    } 
                }                      
        ?>
    </div>
</body>
</html>

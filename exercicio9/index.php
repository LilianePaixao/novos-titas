<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio9</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            
            <label for="numero"> Digite um número:</label>
            <input type ="number" name ="numero" id="numero">

        </form>
        <?php
        /* Entrar com o número de vezes que se deseja
imprimir a palavra SOL e imprimir */
            for ($i=1;$i <= $_POST["numero"];$i++){
                echo "SOL".PHP_EOL;
            } 
           
               
        ?>
    </div>
</body>
</html>

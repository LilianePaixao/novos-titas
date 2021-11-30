<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio10</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            
            <label for="numero"> Informe 20 números:</label>
            <input type ="number" name ="numero" id="numero">
            <input type ="submit" value = "Enviar">         


        </form>
        <?php
        $numeros = $_POST["numero"];
        if($_POST["numero"]>=0)
            for ($i=1;$i <= $_POST["numero"];$i++){
                echo "SOL".PHP_EOL;
            } 
                          
        ?>
    </div>
</body>
</html>

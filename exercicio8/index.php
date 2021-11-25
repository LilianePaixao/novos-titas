<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio8</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            
            <label for="numero"> Digite um número:</label>
            <input type ="number" size= "100" maxlength ="100" name ="numero" id="numero">

        </form>
        <?php
        /* Criar um algoritmos que leia um número e  imprima todos os número de 1 até ele e o seu produto. */
            for ($i=1;$i <= $_POST["numero"];$i++){
                echo $i.PHP_EOL;
            } 
           
            for ($c =0;$c<=10;$c++){
                $resultado = $_POST["numero"]* $c;
                echo $_POST["numero"] . 'x '. $c .' = '. $resultado . PHP_EOL;
            }     
            
        ?>
    </div>
</body>
</html>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 10</title>
</head>
<body>
    <div>        
        <form action = "index.php" method="POST">
            
            <label for="numero"> Informe 20 números:</label>
            <input type ="text" name ="numero" id="numero">
            <input type ="submit" value = "Enviar">
            <p>Os números informados podem ser positivos ou negativos<br/></p>
            <p>Os números informados devem ser separdos pos vírgulas<br/></p>         
        </form>
        
        <?php
        $numeros = $_POST["numero"];

        $array_numeros = explode (",", $numeros);

        foreach($array_numeros as $numero){
            if ($numero > 0){
            echo "A soma dos números positivos é ". array_sum($array_numeros). "<br/>";
            }else {
            echo "A quantidade de números negativos é" . count($numero) ;
            }
        }
          
        ?>
    </div>
</body>
</html>


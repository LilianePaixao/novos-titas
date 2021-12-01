<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio11</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            
            <label for="numero"> Informe um número</label>
            <input type ="number" name ="numero" id="numero">
            <input type ="submit" value = "Enviar">          


        </form>
        <?php
        $numero = $_POST["numero"];
              for ($i=0;$i <= 10;$i++){
                echo $i ." x " .$_POST["numero"]. "=". $i*$_POST["numero"]. "<br/>";
            }                   
        ?>
    </div>
</body>
</html>

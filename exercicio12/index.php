<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio12</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            
            <label for="numero"> Digite um número:</label>
            <input type ="number" name ="numero" id="numero">
            <button type ="submit">Enviar</button>

        </form>
        <?php
            for ($i=1;$i <= $_POST["numero"];$i++){
                //qtde linhas
                                
                for ($c=$i; $c > 0;$c--){
                echo "SONHO";
                        }
            echo "<br/>";
            }                               
        ?>
    </div>
</body>
</html>

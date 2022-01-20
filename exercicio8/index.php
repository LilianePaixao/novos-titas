<html>
<head>
    <link rel="stylesheet" href="/exercicio8/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio8</title>
</head>
<body>
    <div>
        <form action = "/exercicio8/index.php" method="POST">
            
            <label for="numero"> Digite um número:</label>
            <input type ="number" size= "100" maxlength ="100" name ="numero" id="numero">
            
            <input type="submit" value="Enviar">
        </form>
        <?php
        /* Criar um algoritmos que leia um número e  imprima todos os número de 1 até ele e o seu produto. */
            
            $numeroInformado = $_POST["numero"]; // dentro do post tem que ficar o name do input

            for ($i=1;$i <= $numeroInformado;$i++){
                echo "$i <br/>";
            } 
           
            for ($c =0; $c <= $numeroInformado; $c++){
                $resultado = $numeroInformado * $c;
                ?>

                 <div class= 'camporesultado'>
                  <?= "$numeroInformado x  $c  =   $resultado " ?>
                 </div> <br/> 
            
            <?php     
            }     
            
        ?>
    </div>
</body>
</html>

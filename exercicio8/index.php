<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/exercicio8/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio8</title>
</head>
<body>
    <h1>Exercício 8</h1>
    <p>Criar um algoritmo que leia um número e  imprima todos os número de 1 até ele e o seu produto.</p>
    <div>
        <form action = "/exercicio8/index.php" method="POST">
            <label for="numero"> Digite um número:</label>
            <input type ="number" size= "100" maxlength ="100" name ="numero" id="numero">
            <input type="submit" value="Enviar" class="Enviar">
        </form>
        <?php
            $param1 = $_POST["numero"]; // dentro do post tem que ficar o name do input
            
            //if(!empty($param1)){
            if($_POST["numero"] >= 1 ){    
                readNumber($param1);
            } elseif ($_POST["numero"] < 0 || $_POST["numero"] == 0 ){
                echo "Informe um número inteiro e positivo";
            }

        function readNumber($param1){    
            for ($i=1; $i <= $param1; $i++){
                echo "$i <br/>";
            } 
                for ($c = 0; $c <= $param1; $c++){
                $resultado = $param1 * $c;
                echo "$param1 x  $c  = $resultado <br/>";
                }        
            }
           
        ?>
    </div>
</body>
</html>

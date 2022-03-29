<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/base/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio17</title>
</head>
<body>
    <h1>Exercício 17</h1>
    <p> Na primeira coluna armazene 20 números inteiros, na segunda coluna mostre quais desses números são pares e na terceira coluna quais são ímpares.</p>
    <div>
        <form action = "/exercicio17/index.php" method="POST">
            <fieldset>
                <label for="numero"> Informe 20 números separados com ",":</label>
                <input type ="text" size= "100" maxlength ="50" name = "numerosDigitados">
                <input type="submit" value="enviar" class="enviar">
            </fieldset>
        </form>
        
        <?php

            if (!empty($_POST["numerosDigitados"])){

                if($_POST["numerosDigitados"] >=0){
                    $numerosInformados = $_POST["numerosDigitados"];
                    
                    $array_numeros = explode (",", $numerosInformados);
                                                 
                foreach($array_numeros as $numero){    
                     $numero % 2 ==0 ? $par[] = $numero : $impar[] = $numero;
                }
                //Maior número
                echo "O maior número é ". max($array_numeros);
                //media        
                echo "A média será". array_sum($array_numeros);
                // Porcentagem
                echo "A porcentagem de números pares é ". $par * 5 . " %";    
                } 
                else
                    echo "Os números informados devem ser positivos";
            }            
        ?>
    </div>
</body>
</html>

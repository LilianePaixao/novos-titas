<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/base/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio16</title>
</head>
<body>
    <h1>Exercício 16</h1>
    <p> Na primeira coluna armazene 15 números inteiros, na segunda coluna mostre quais desses números são pares e na terceira coluna quais são ímpares.</p>
    <div>
        <form action = "/exercicio16/index.php" method="POST">
            
            <label for="numero"> Informe 15 números separados com ",":</label>
            <input type ="text" size= "100" maxlength ="50" name = "numerosDigitados" placeholder = "1,2,110,200,300,0...">

            <input type="submit" value="enviar" class="enviar">
            
        </form>
        
        <?php

            if (!empty($_POST["numerosDigitados"])){

                if($_POST["numerosDigitados"] >=0){
                    $numerosInformados = $_POST["numerosDigitados"];

                    $array_numeros = explode (",", $numerosInformados);
            
                    foreach($array_numeros as $numero){    
                        $numero % 2 ==0 ? $par[] = $numero : $impar[] = $numero;
                    }
                    // mostra valores
                    echo "Os números pares são".'<pre>';
                    var_dump($par);
    
                    echo "Os números ímpares são".'<pre>';
                    var_dump($impar);
                } 
                else
                    echo "Os números informados devem ser positivos";
            }            
        ?>
    </div>
</body>
</html>

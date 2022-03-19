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
    <p>Armazenar 15 números inteiros em um vetor
e imprimir uma mensagem contendo o
número e uma das mensagens: par ou ímpar</p>
    <div>
        <form action = "/exercicio16/index.php" method="POST">
            
            <label for="numero"> Informe 15 números separados com ",":</label>
            <input type ="text" size= "100" maxlength ="50" name = "numerosDigitados" placeholder = "1,2,110,200,300,0...">

            
            <input type="submit" value="enviar" class="enviar">
            
        </form>
        
        <?php
        if (isset ($_POST["numerosDigitados"])){
            
            $numerosInformados = $_POST["numerosDigitados"];

            $array_numeros = explode (",", $numerosInformados);

            foreach($array_numeros as $numero){    
                if ($numero % 2 == 0) {
                    $numerosPares[] = $numerosPares;

                } else {
                    $numerosImpares[] = $numerosImpares;
                } 
            }
        } else {
            echo "Você ainda não informou nenhum número.</br>";
        }
        echo " Os números pares são " . $numerosPares;
        ?>
    </div>
</body>
</html>

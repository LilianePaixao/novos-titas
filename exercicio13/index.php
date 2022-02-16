?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/exercicio13/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio13</title>
</head>
<body>
    <h1>Exercício 13</h1>
    <p>Ler vários números e informar quantos
números entre 100 e 200 foram digitados. Se
o valor 0 for lido encerrar a execução.</p>
    <div>
        <form action = "/exercicio13/index.php" method="POST">
            <label for="numero"> Informe os numeros separados com ",":</label>
            <input type ="text" size= "100" maxlength ="50" name = "numero" placeholder = "1,2,110,200,300,0">
            <input type="submit" value="enviar" class="enviar">
            <p> Para parar a execução digite o número zero </p>
        </form>
        
        <?php
        if (isset ($_POST["numero"])){
            
            $numerosInformados = $_POST["numero"];

            $array_numeros = explode (",", $numerosInformados);

            foreach($array_numeros as $numero){    
                if($numero <= 200 && $numero >=100){
                    $target[] = $numero;
                } elseif ($numero == 0){
                    echo "Você informou o número 0, por isso a execução foi parada.</br>";
                    break;
                } 
            }
            if (empty($target)){
                echo "Você não informou nenhum número entre 100 e 200.</br>";
            } else {
                echo "A quantidade de números entre 100 e 200 é " . count($target). "</br>" ;
            }
        }
        ?>
    </div>
</body>
</html>

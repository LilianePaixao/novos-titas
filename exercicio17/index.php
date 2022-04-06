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
    <p> Criar o(s) campo(s) e pedir para o usuario digitar.</p>
    <p> Fazer a logica de php que checa qual é o maior e menor.</p>
    <p> Fazer a logica de php para calcular o % de numeros pares e media dos elementos.</p>
    <p> Exibir msg na tela com os resultados</p>
    <div>
        <form action = "/exercicio17/index.php" method="POST">
            <fieldset>
                <label for="numero"> Informe 20 números separados com ",":</label>
                <input type ="text" size= "100" maxlength ="80" name = "numerosDigitados">
                <input type="submit" value="enviar" class="enviar">
            </fieldset>
        </form>
        
        <?php

            if (!empty($_POST["numerosDigitados"])){

                if($_POST["numerosDigitados"] > 0){
                    $numerosInformados = $_POST["numerosDigitados"];
                    
                    $array_numeros = explode (",", $numerosInformados);
                                                 
                    foreach($array_numeros as $numero){    
                        if ($numero % 2 == 0){
                            $par[] = $numero;
                        } else {
                            $impar[] = $numero;
                        }
                        $sum += $numero;
                    }
                    $menorNumero = min($array_numeros);
                    $maiorNumero = max($array_numeros);
                    $media = $sum/20;
                    $porcentagem = count($par)*5;
                    //Menor número
                    echo "O menor número informado é $menorNumero.";
                    //Maior número
                    echo "O maior número informado é $maiorNumero. ";
                    //media        
                    echo " A média será $media. ";
                    // Porcentagem
                    echo "A porcentagem de números pares é $porcentagem % .";    
                } else {
                    echo "Os números informados devem ser positivos.";
                }
            } 
               
            //Trata os valores informados para evitar sql injection
            $numerosDigitados = mysqli_escape_string($connect, $_POST['numerosDigitados']);
            //Insert on DB
            $sql = "INSERT INTO Numeros (`numerosDigitados`, `menorNumero`, `maiorNumero`, `media`, `porcentagem`) VALUES ('$numerosDigitados', '$menorNumero','$maiorNumero', '$media','$porcentagem')";
            
        ?>
    </div>
</body>
</html>

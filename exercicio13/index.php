<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <link rel="stylesheet" href="/exercicio13/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <div>
        <h1> Exercício 13 </10>
        <h2> Ler vários números e informar quantos
números entre 100 e 200 foram digitados. Se
o valor 0 for lido encerrar a execução</h2>  

        <form action = "/exercicio13/index.php" method="POST">
            <label for="numero"> Informe ao menos cinco números entre 0 e 200:</label>
            <input type ="text" name ="numero"placeholder="exemplo:1-100-2-150-20">
            <p>Os números informados devem ser separados por - (traço) <br/></p>     
            <input type="submit" value="enviar" class="enviar">
        </form>
        <?php
        $array_numbers = '';
        $length = '';
        $qtd = 0;
       
        if (isset ($_POST["numero"])){
       
            $numerosInformados = $_POST["numero"];

            $array_numeros = explode ("-", $numerosInformados);
            
            foreach($array_numeros as $numero){    
                if($numero <= 200 && $numero >=100){
                    $cemdu[] = $numero;
                }elseif ($numero == 0){
                    echo "Execução do programa parada </br>" ;
                } 
            }
            echo "A quantidade de números entre 100 e 200 é " . count($cemdu). "</br>" ;
                                
                     
        }       
        ?>
    </div>
</body>
</html>


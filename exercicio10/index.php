<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <link rel="stylesheet" href="/exercicio10/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <div>
        <h1> Exercício 10 </10>
        <h2> Entrar com 20 números e imprimir a soma
dos positivos e o total de números negativos</h2>        
        <form action = "/exercicio10/index.php" method="POST">
            
            <label for="numero"> Informe 20 números:</label>
            <input type ="text" name ="numero">
            

            <p>Os números informados podem ser positivos ou negativos<br/></p>
            <p>Os números informados devem ser separados por vírgulas<br/></p>     
            
            <input type="submit" value="enviar" class="enviar">

        </form>
        
        <?php
       
       if (isset ($_POST["numero"])){
       
        $numerosInformados = $_POST["numero"];

        $array_numeros = explode (",", $numerosInformados);
        
            foreach($array_numeros as $numero){    
                ($numero <= 0) ? $neg[] = $numero : $pos[] = $numero;
            }
            echo "A soma dos números positivos é ". array_sum($pos). "<br/>";
            echo "A quantidade de números negativos é " . count($neg). "<br>" ;             
        }
        ?>
    </div>
</body>
</html>


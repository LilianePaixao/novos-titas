<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/exercicio9/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio9</title>
</head>
<body>
    <div>
        <h1> Exercício 9 </h1>
        <p>Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir</p>
        <form action = "/exercicio9/index.php" method="POST">
            
            <label for="numero"> Digite um número:</label>
            <input type ="number" name ="numero" id="numero">

            <input type="submit" value="enviar" class="enviar">

        </form>

        <?php
        
        $param = $_POST["numero"];
        sol($param);

        function sol($param){
            for ($i=1;$i <= $param;$i++)
                echo "SOL <br/>";
            } 
        ?>
    </div>
</body>
</html>

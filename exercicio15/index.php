<?php
//Conexão
include_once '/db_connect.php';      
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="/base/style.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio15</title>
</head>

<body>
    <div>
        <h1> Exercício 15</h1>
        <p> Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmos que imprima o tempo necessário para que a massa desse material seja menor que 0.10</p>
        <form action = "exercicio15/index.php" method="POST">
            
            <label for="massa" > Digite a massa do material radioativo (g):</label>
            <input type ="float" name ="massa" id="massa" size="20" placeholder="Exemplo 0.2">

            <label for="perda" > Porcentagem de perda:</label>
            <input type ="number" name ="perda" id="perda" size="20" placeholder="Use 25 para 25%">
            
            <button type ="submit" class="enviar">enviar</button>

        </form>
        <?php
            if (isset($_POST["massa"])){
            
                $tempo = 0;
                $massa = $_POST["massa"];
                $perda = $_POST["perda"];

                while($massa >= 0.10){
                //incrementa à massa;
                $resultado = $massa -($massa / 100 * $perda);
                $massa = $resultado;
                //conta mais um 
                $tempo++;
                }
            echo "Serão necessários " .  $tempo . " minutos, para que a massa do material seja menor que 0.10 gramas."; 
            } else {
                echo "Infome os dados que se pedem.";
            }
            //conexão com banco de dados
            //$estudanteMaior = mysqli_escape_string($connect, $_POST['higth1']);
            //$estudanteMenor = mysqli_escape_string($connect, $_POST['higth2']);
            //$cresceMaior = mysqli_escape_string($connect, $_POST['growth1']);
            //$cresceMenor = mysqli_escape_string($connect, $_POST['growth2']);
            
            //insere dados no banco de dados
            //$sql = "INSERT INTO Estudantes (higth1,higth2, growth1, growth2) VALUES ('$estudanteMaior', '$estudanteMenor','$cresceMaior', '$cresceMenor')";
       ?>
    </div>
</body>
</html>

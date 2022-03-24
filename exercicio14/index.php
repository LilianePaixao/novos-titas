<?php
//Conexão
include_once 'db_connect.php';      
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="/base/style.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio14</title>
</head>

<body>
    <div>
        <h1> Exercício 14</h1>
        <p> Construir um algoritmos que calcule e imprima quantos anos serão necessários para que o menor estudante seja seja maior que o outro estudante.</p>
        <form action = "/exercicio14/index.php" method="POST">
            
            <label for="higth1" > Digite a altura do primeiro estudante(cm):</label>
            <input type ="text" name ="higth1" id="higth1" size="100" placeholder= "A altura deve ser maior que a altura do próximo estudante">
            
            <label for="growth1" > Quanto cresce por ano (cm) esse primeiro estudante:</label>
            <input type ="text" name ="growth1"id="growth1">

            <label for="higth2"> Digite a altura de outro estudante(cm):</label>
            <input type ="text" name ="higth2" id="higth2" size="100" placeholder= "A altura deve ser menor que a altura já informada ">

            <label for="growth2" > Quanto cresce o segundo estudante por ano (cm):</label>
            <input type ="text" name ="growth2" id="growth2">

            <button type ="submit" class="enviar">enviar</button>

        </form>
        <?php


            if (isset($_POST["higth1" ]) && $_POST["higth2"] ){
            
                $ano = 0;
                $estudanteMaior = $_POST["higth1"];
                $estudanteMenor = $_POST["higth2"];
                $cresceMaior = $_POST["growth1"];
                $cresceMenor = $_POST["growth2"];

                while($estudanteMaior >= $estudanteMenor){
                //incrementa à idade de Chico;
                $estudanteMaior += $cresceMaior;
                //incrementa à idade de Juca
                $estudanteMenor += $cresceMenor;
                //conta mais um ano
                $ano++;
                }
            echo "Serão necessários $ano anos, para que o segundo estudante seja maior que o primeiro estudante informado."; 
            } else {
                echo "Infome os dados que se pedem.";
            }
            //conexão com banco de dados
            $estudanteMaior = mysqli_escape_string($connect, $_POST['higth1']);
            $cresceMaior = mysqli_escape_string($connect, $_POST['growth1']);
            $estudanteMenor = mysqli_escape_string($connect, $_POST['higth2']);
            $cresceMenor = mysqli_escape_string($connect, $_POST['growth2']);
            
            //insere dados no banco de dados
            $sql = "INSERT INTO Estudantes (higth1, growth1, higth2, growth2) VALUES ('$estudanteMaior', '$cresceMaior','$estudanteMenor', '$cresceMenor')";

            try {
                if ($mysqli = mysqli_query($connect, $sql)) {
                   // header('Location:index.php?sucesso');
                  exit;
                } else {
                 //   header('Location:index.php?erro');
                 printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
                 var_dump($connect);
              }
      
              } catch (Exception $e) {
                  echo 'Exceção capturada: ',  $e->getMessage(), "\n";
              } 
       ?>
    </div>
</body>
</html>

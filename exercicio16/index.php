<?php
//conexão
include_once 'db_connect.php';
include_once 'test_execute_connection.php';

?>

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
            <input type ="text" size= "100" maxlength ="50" name = "numeros_digitados" placeholder = "1,2,110,200,300,0...">

            <input type="submit" value="enviar" class="enviar">
            
        </form>
        
        <?php

            if (!empty($_POST["numeros_digitados"])){

                if($_POST["numeros_digitados"] >= 0){
                    $numerosInformados = $_POST["numeros_digitados"];

                    $array_numeros = explode (",", $numerosInformados);
            
                    foreach($array_numeros as $numero){    
                        $numero % 2 ==0 ? $par[] = $numero : $impar[] = $numero;
                    }
                    // mostra valores
                    $arrayPar = implode (",", $par);

                    $arrayImpar = implode (",", $impar);

                    
                    //Print datas
                    $sql = "SELECT * FROM Numeros";
                    $resultado = mysqli_query($connect, $sql);
                
                     while ($dados = mysqli_fetch_array($resultado)){
                    ?>
                    <table>
                        <tr>
                            <th> id </th>  
                            <th> Números digitados </th>
                            <th> Números pares </th> 
                            <th> Números ímpares </th>  
                        </tr>
                        <tr>
                            <td><?= $dados['id'];?> </td>
                            <td><?= $dados['numeros_digitados'];?> </td>
                            <td><?= $dados['numeros_pares'];?></td>
                            <td><?= $dados['numeros_impares'];?></td>
                        </tr>
                    </table>  
                    <?php
                    }        
                } 
                else
                    echo "Os números informados devem ser positivos";
            }   
            
            //Trata os valores para evitar sql injection
            $numerosDigitados = mysqli_escape_string($connect, $_POST['numeros_digitados']);
            $numerosPares = mysqli_escape_string($connect, $par);
            $numerosImpares= mysqli_escape_string($connect, $impar);

            $sql = "INSERT INTO Numeros (numeros_digitados, numeros_pares, numeros_impares) VALUES ('$numerosDigitados', '$arrayPar','$arrayImpar')";         
        
            //teste de conexão
            test_execute_connection($connect, $sql);
        ?>
    </div>
</body>
</html>

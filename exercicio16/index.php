<?php
//conexão
include_once 'db_connect.php';
include_once 'execute_connection.php';
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
        
            if (isset($_POST["numeros_digitados"])&& ($_POST["numeros_digitados"] >= 0)) {

                $numerosInformados = $_POST["numeros_digitados"];

                $array_numeros = explode(",", $numerosInformados);
        
                foreach($array_numeros as $numero){    
                    $numero % 2 == 0 ? $par[] = $numero : $impar[] = $numero;
                } 

                // Change array to string
                $stringPar = implode(",", $par);
                $stringImpar = implode(",", $impar);
                $stringNumeros = implode(",", $array_numeros);

                //Treatment to avoid sql injection
                $numerosDigitados = mysqli_escape_string($connect, $stringNumeros);
                $numerosPares = mysqli_escape_string($connect, $stringPar );
                $numerosImpares= mysqli_escape_string($connect, $stringImpar);

                $sql = "INSERT INTO exercicio16 (`numeros_digitados`, `numeros_pares`, `numeros_impares`) VALUES ('$numerosDigitados', '$numerosPares','$numerosImpares')";  

                execute_connection($connect, $sql);
                }
                else {
                    echo "Os números informados devem ser positivos";
            }   
            
            

            //Print datas
            $sql = "SELECT * FROM exercicio16";
            $resultado = execute_connection($connect, $sql);

        ?>

<?php
        
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
        ?>
    </div>
</body>
</html>

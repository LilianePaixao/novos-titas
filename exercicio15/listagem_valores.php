<?php
//Conexão
include_once 'db_connect.php';    
include_once 'test_execute_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Print datas
        $sql = "SELECT * FROM Cientistas";
        $resultado = mysqli_query($connect, $sql);
     
        while ($dados = mysqli_fetch_array($resultado)){
    ?>
            <table>
                <tr>
                    <th> id </th>  
                    <th> Massa </th>
                    <th> Perda % </th> 
                    <th> Tempo para perda </th>  
                    <th> Tempo em minutos </th>  
                </tr>
                <tr>
                    <td><?= $dados['id'];?> </td>
                    <td><?= $dados['massa'];?> </td>
                    <td><?= $dados['perda'];?></td>
                    <td><?= $dados['tempo_perda'];?></td>
                    <td><?= $dados['resultado_calculo'];?></td>
                </tr>
            </table>  
        <?php
            }   
        ?>
</body>
</html>
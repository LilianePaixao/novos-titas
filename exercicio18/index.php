<?php
//connection
include_once 'db_connect.php';
include_once 'execute_connection.php';
//header
include_once './includes/header.php';
?>

<body>
  <div class = "container" style="width:700px" id="centro">
      <h3 class="ligth">Exercício 18</h3>
        <form action = "/exercicio18/index.php" method="POST">
            <label for="numero"> Informe 10 números separados com ",":</label>
            <input type ="text" size= "100" maxlength ="50" name = "numbers1" placeholder = "1,2,110,200,300,0...">
            <label for="numero"> Informe 10 números separados com ",":</label>
            <input type ="text" size= "100" maxlength ="50" name = "numbers2" placeholder = "1,2,110,200,300,0...">
            <input type="submit" value="enviar" class="enviar">
        </form>
    
    <?php
    
        if (isset($_POST["numbers1"]) && ($_POST["numbers2"])) {

            $arrayNumbers1 = explode(",", $_POST["numbers1"]);
            $arrayNumbers2 = explode(",", $_POST["numbers2"]);
    
            $result = array_diff($arrayNumbers1, $arrayNumbers2);
            $resultOther = array_diff($arrayNumbers2, $arrayNumbers1);

            // Change array to string
            $stringNumbers1 = implode(",", $arrayNumbers1);
            $stringNumbers2 = implode(",", $arrayNumbers2);
            $stringResult = implode(",", $result);
            $stringResultOther = implode(",", $resultOther);
            
            //Treatment to avoid sql injection
            $stringNumbers1 = mysqli_escape_string($connect, $stringNumbers1);
            $stringNumbers2 = mysqli_escape_string($connect, $stringNumbers2 );
            $stringResult = mysqli_escape_string($connect, $stringresult);
            $stringResultOther = mysqli_escape_string($connect, $stringresultOther);
            
            $sql = "INSERT INTO exercicio18 (`numbers1`, `numbers2`, `result`) VALUES ('$stringNumbers1', '$stringNumbers2','$stringResult . $stringResultOther')";  
            
            execute_connection($connect, $sql);
            
            //Print datas
            $sql = "SELECT * FROM exercicio18";
            $resultado = execute_connection($connect, $sql);
            
            ?>
                <table>
                <tr>
                    <th> id </th>  
                    <th> Primeira lista de números informados </th>
                    <th> Segunda lista de números informados </th> 
                    <th> Números incomuns</th>  
                </tr>
            <?php
                
                while ($dados = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <td><?= $dados['id'];?> </td>
                    <td><?= $dados['numbers1'];?> </td>
                    <td><?= $dados['numbers2'];?></td>
                    <td><?= $dados['result'];?></td>
                </tr>
                </table>  
            <?php
                }    

        }   
//footer
include_once './includes/footer.php';
?>

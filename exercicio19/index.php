<?php
//connection
include_once 'db_connect.php';
include_once 'execute_connection.php';
//header
include_once './includes/header.php';
?>

<body>
  <div class = "container" style="width:700px" id="centro">
      <h3 class="ligth">Exercício 19</h3>
        <form action = "/exercicio19/index.php" method="POST">
            <label for="array"> Informe 25 números separados com ",":</label>
            <input type ="text" size= "100" maxlength ="100" name = "array" placeholder = "1,2,110,200,300,0...">
            
            <input type="submit" value="enviar" class="enviar">
        </form>
    
    <?php
    
        if (isset($_POST["array"])) {

            $array = explode(",", $_POST["array"]);
    
            $split = 5;

            $arrayMulti = array_chunk($array, $split);

            echo "Os números que compõem a diagonal são <br/>";
            
            $firstPosition = $arrayMulti[0][0];
            $secondPosition = $arrayMulti[1][1];
            $thirdPosition = $arrayMulti[2][2];
            $fourthPosition = $arrayMulti[3][3];
            $fifthPosition = $arrayMulti[4][4];
            $sixthPosition = $arrayMulti[5][5];

            echo "$firstPosition <br/>";
            echo "$secondPosition <br/>";
            echo "$thirdPosition <br/>";
            echo "$fourthPosition <br/>";
            echo "$fifthPosition <br/>";
            echo "$sixthPosition <br/>";
                             
            //Treatment to avoid sql injection
            $inputNumber = mysqli_escape_string($connect, $_POST["array"]);

            $sql = "INSERT INTO exercicio19 (`array`,`firstPosition`, `secondPosition`, `thirdPosition`, `fourthPosition`, `fifthPosition`, `sixthPosition`) VALUES ('$inputNumber','$firstPosition', '$secondPosition','$thirdPosition', '$fourthPosition', '$fifthPosition', '$sixthPosition')";  
            
            execute_connection($connect, $sql);
            
            //Print datas
            $sql = "SELECT * FROM exercicio19";
            $resultado = execute_connection($connect, $sql);
            
            ?>
                <table>
                <tr>
                    <th> id </th>  
                    <th> Números informados</th>
                    <th> Primeira Posição </th> 
                    <th> Segunda Posição</th>  
                    <th> Terceira Posição</th> 
                    <th> Quarta Posição</th> 
                    <th> Quinta Posição</th> 
                </tr>
            <?php
                
                while ($dados = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <td><?= $dados['id'];?> </td>
                    <td><?= $dados['array'];?></td>
                    <td><?= $dados['firstPosition'];?></td>
                    <td><?= $dados['secondPosition'];?></td>
                    <td><?= $dados['thirdPosition'];?></td>
                    <td><?= $dados['fourthPosition'];?></td>
                    <td><?= $dados['fifthPosition'];?></td>
                </tr>
                <?php
                }
                ?>    
             
            </table>     
        <?php    
        }   
//footer
include_once './includes/footer.php';
?>
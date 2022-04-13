<?php
//connection
include_once 'db_connect.php';
include_once 'execute_connection.php';
//header
include_once './includes/header.php';
?>

<body>
  <div class = "container" style="width:700px" id="centro">
      <h3 class="ligth">Dados Informados</h3>
        <form action = "/exercicio16/index.php" method="POST">
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

            // Change array to string
            $stringNumbers1 = implode(",", $arrayNumbers1);
            $stringNumbers2 = implode(",", $arrayNumbers2);
            $stringresult = implode(",", $result);

            //Treatment to avoid sql injection
            $stringNumbers1 = mysqli_escape_string($connect, $stringNumbers1);
            $stringNumbers2 = mysqli_escape_string($connect, $stringNumbers2 );
            $stringresult= mysqli_escape_string($connect, $stringresult);

            $sql = "INSERT INTO exercicio17 (`numbers1`, `numbers2`, `result`) VALUES ('$stringNumbers1', '$stringNumbers2','$stringresult')";  

            execute_connection($connect, $sql);
            }
            else {
                echo "Preencha os campos conforme solicitado.";
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
<?php
//footer
include_once './includes/footer.php';
?>

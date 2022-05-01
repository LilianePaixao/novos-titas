<?php
//connection
include_once 'db_connect.php';
include_once 'execute_connection.php';
//header
include_once './includes/header.php';
//arrayToMat
include_once 'arrayToMat.php';
include_once 'displayMat.php';
?>

<body>
  <div class = "container" style="width:700px" id="centro">
      <h3 class="ligth">Exercício 20</h3>
        <form action = "/exercicio20/index.php" method="POST">
            <label for="numbersInput"> Informe 25 números separados com ",":</label>
            <input type ="text" size= "100" maxlength ="66" name = "numbersInput" placeholder = "1,2,110,200,300,0...">
            
            <input type="submit" value="enviar" class="enviar">
        </form>
    
    <?php
        
        if (isset($_POST["numbersInput"])) {

            $array = explode(",", $_POST["numbersInput"]);

            $split = 5;
            
            
            //Complete matrix
            arrayToMat($array, $split);

            displayMat($mat);

            //Matrix impar
            function impar($var)
            {
                return $var & 1;
            }
            echo "<pre>";
            $arrayImpar = print_r(array_filter($array, "impar"));
            echo "<pre>";
            
            arrayToMat($arrayImpar, $split);

            displayMat($mat);

            //Matrix impar
            function par($var)
            {
                return !($var & 1);
            }
            echo "<pre>";
            $arrayPar = print_r(array_filter($array, "par"));
            echo "<pre>";

            arrayToMat($arrayPar, $split);

            displayMat($arrayPar);
        }    
            
//footer
include_once './includes/footer.php';
?>
 

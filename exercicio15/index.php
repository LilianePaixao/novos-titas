<?php
//Conexão
include_once 'db_connect.php';    
include_once 'test_execute_connection.php';

function massRadio(){
    if (isset($_POST["massa"])){
    
        $tempoPerda = $_POST["tempo_perda"];
        $massa = $_POST["massa"];
        $perda = $_POST["perda"];
        $count = 0;

        for($massa; $massa>=0.1; $tempoPerda){
            //incrementa à massa;
            $resultado = $massa -($massa / 100 * $perda);
            $massa = $resultado;
            //conta mais um 
            $count++;
        }
        $totalTime = $tempoPerda*$count;
        $tempoResultado = $totalTime/60;

        echo "Serão necessários " .  $tempoResultado . " minuto(s), para que a massa do material seja menor que 0.10 gramas."; 
    } else {
        echo "Informe os dados que se pedem";
    }
    ?>
    <a href='/exercicio15/listagem_valores.php' class="sumit"> Valores informados</a>
<?php    
}  
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
        <p> Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo.<br/>

        Seu sistema deverá receber:<br/>
        Um campo para informar a massa do material radioativo (em gramas)<br/>
        Um campo para dizer a % de perda <br/> 
        Um campo para dizer em quanto tempo perde essa % em segundos.</p>
        <form action = "/exercicio15/index.php" method="POST">
            
            <label for="massa" > Digite a massa do material radioativo (g):</label>
            <input type ="text" name ="massa" id="massa" size="20" placeholder="Exemplo 0.2">

            <label for="perda" > Porcentagem de perda:</label>
            <input type ="text" name ="perda" id="perda" size="20" placeholder="Use 25 para 25%">

            <label for="tempo_perda" > Qual tempo para que essa perda ocorra(segundo)</label>
            <input type ="text" name ="tempo_perda"id="tempo_perda" size="20" placeholder="segundos">
            
            <button type ="submit" class="enviar">enviar</button>

        </form>
        <?php
        
        //Trata os valores informados para evitar sql injection
        $massa = mysqli_escape_string($connect, $_POST['massa']);
        $perda = mysqli_escape_string($connect, $_POST['perda']);
        $tempoPerda= mysqli_escape_string($connect, $_POST['tempo_perda']);
        $tempoResultado= mysqli_escape_string($connect,$tempoResultado);
       
        $sql = "INSERT INTO Cientistas (massa, perda, tempo_perda, resultado_calculo) VALUES ('$massa', '$perda','$tempoPerda', '$tempoResultado')";

        
        test_execute_connection($connect, $sql);
        massRadio();
        
       ?>
    </div>
</body>
</html>

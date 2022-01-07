<!DOCTYPE html>
<html lang="pt-br">
    <head>  
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="/exercicio4/style.css">
        <title>Exercício 4 </title> 
    </head>
<body>
    <h1> Exercício 4 </h1>
    <p> Entrar com 3 números e imprimi-los em ordem decrescente (suponha números
diferentes)</p>
    <fieldset>

        <form action = "/exercicio4/index.php" method="POST">
            <label for="n1"> Digite um número:</label>
            <input type ="number" size= "10" id="n1" name ="n1" required>
            <label for="n2">Digite outro número: </label>
            <input type ="number" size= "10" id="n2" name ="n2" required>
            <label for="n3"> Digite um terceiro número:</label> 
            <input type ="number" size= "10" id="n3" name ="n3" required>
            <input type="submit" value="Enviar" class="enviar">
        </form>

    </fieldset>   
        <?php
        /* Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes */
        if($_POST["n1"] == null && $_POST["n2"] == null && $_POST["n3"] == null){
            echo "";
        }elseif($_POST["n1"] < $_POST["n2"] && $_POST["n1"] < $_POST["n3"] && $_POST["n2"] < $_POST["n3"]) {
            echo "Os números informados em ordem decrescente são " . $_POST["n3"]."," .$_POST["n2"]." e ".$_POST["n1"];
        }elseif ($_POST["n3"] < $_POST["n2"] && $_POST["n3"]<$_POST["n1"]&& $_POST["n2"]<$_POST["n1"]){
            echo "Os números informados em ordem decrescente são ". $_POST["n1"]."," .$_POST["n2"]." e ".$_POST["n3"];
        } else {
            echo "Os números informados em ordem decrescentes são ". $_POST["n2"]."," .$_POST["n1"]." e ".$_POST["n3"];
        }
            ?>
       
    </body>
</html>

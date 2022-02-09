<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="/exercicio5/style.css">
        <title>Exercicio 5</title>
    </head>
<body>
    <h1> Exercício 5 </h1>  
    <h2>Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados</h2>  
        <fieldset>
            <form action = "/exercicio5/index.php" method="POST">
                <label for="n1"> Digite um lado de um triângulo:</label>
                <input type ="number" size= "10" maxlength ="10" name ="n1">
                
                <label for="n2">Digite outro lado de um triângulo: </label>
                <input type ="number" size= "10" maxlength ="10" name ="n2">
                
                <label for="n3"> Digite um terceiro lado de um triângulo:</label> 
                <input type ="number" size= "10" maxlength ="10" name ="n3">

                <input type="submit" value="Enviar" class="enviar">
            </form>
        </fieldset>
            
        <?php
        if($_POST["n1"] == null && $_POST["n2"] == null && $_POST["n3"] == null){
            echo "";
        }elseif($_POST["n1"] <= 0 || $_POST["n2"] <= 0 || $_POST["n3"] <= 0){
        echo "Os números informados devem ser superior a 0 (zero)";    
        }elseif($_POST["n1"] <> $_POST["n2"] && $_POST["n1"] <> $_POST["n3"]) {
            echo "Trata-se de um triângulo escaleno, porque possui todos os lados diferentes: ". $_POST["n3"] ." , ". $_POST["n2"] . " e " . $_POST["n1"];
        }elseif ($_POST["n1"] == $_POST["n3"] && $_POST["n1"] == $_POST["n2"]){
            echo "Trata-se de um triângulo equilátero, porque possui todos os lados iguais: ". $_POST["n1"] . " , " . $_POST["n2"] . " e " . $_POST["n3"];
        } else {
            echo "Trata-se de um triângulo isósceles porque possui ao menos dois lados iguais". $_POST["n2"]." , ". $_POST["n1"]. " e ". $_POST["n3"];
        }
        ?>
  
</body>
</html>

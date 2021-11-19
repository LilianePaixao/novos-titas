<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            <label for="n1"> Digite um lado de um triângulo:</label>
            <input type ="number" size= "10" maxlength ="10" name ="n1">
            <label for="n2">Digite outro lado de um triângulo: </label>
            <input type ="number" size= "10" maxlength ="10" name ="n2">
            <label for="n3"> Digite um terceiro lado de um triângulo:</label> 
            <input type ="number" size= "10" maxlength ="10" name ="n3">
        </form>
        
        <?php
        /* Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados */
        if($_POST["n1"] <> $_POST["n2"] && $_POST["n1"] <> $_POST["n3"]) {
            echo "Trata-se de um triângulo escaleno, porque possui todos os lados diferentes: ". $_POST["n3"] . $_POST["n2"] . $_POST["n1"];
        }elseif ($_POST["n1"] == $_POST["n3"] && $_POST["n1"] == $_POST["n2"]){
            echo "Trata-se de um triângulo equilátero, porque possui todos os lados iguais: ". $_POST["n1"] . $_POST["n2"] .$_POST["n3"];
        } else {
            echo "Trata-se de um triângulo isósceles porque possui ao menos dois lados iguais". $_POST["n2"].$_POST["n1"].$_POST["n3"];
        }
        ?>
    </div>
</body>
</html>

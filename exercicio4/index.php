<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            <label for="n1"> Digite um número:</label>
            <input type ="number" size= "10" maxlength ="10" name ="n1">
            <label for="n2">Digite outro número: </label>
            <input type ="number" size= "10" maxlength ="10" name ="n2">
            <label for="n3"> Digite um terceiro número:</label> 
            <input type ="number" size= "10" maxlength ="10" name ="n3"></p>
        </form>
        
        <?php
        /* Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes */
        if($_POST["n1"] < $_POST["n2"] && $_POST["n1"] < $_POST["n3"] && $_POST["n2"] < $_POST["n3"]) {
            echo "Os números informados em ordem decrescente é" . $_POST["n3"].$_POST["n2"].$_POST["n1"];
        }elseif ($_POST["n3"] < $_POST["n2"] && $_POST["n3"]<$_POST["n1"]&& $_POST["n2"]<$_POST["n1"]){
            echo "Os números informados em ordem decrescente é ". $_POST["n1"].$_POST["n2"].$_POST["n3"];
        } else {
            echo "Os números informados em ordem decrescentes é ". $_POST["n2"].$_POST["n1"].$_POST["n3"];
        }
    ?>
    </div>
</body>
</html>

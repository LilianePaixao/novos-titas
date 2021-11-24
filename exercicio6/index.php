<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio6</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            <label for="n"> Digite um número inteiro entre 1 e 12:</label>
            <input type ="number" size= "10" maxlength ="10" name ="n" id="n">
        </form>
        <?php
        /* Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número */

         $meses=["0","janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro"];
         $mesInformado=$meses[$_POST["n"]];

            if($_POST["n"] >= 1 && $_POST["n"] <= 12) {
                echo "O mês correspondente ao número digitado é ". $meses[n];
            } elseif ($_POST["n"] < 1 && $_POST["n"] > 12){
                echo "Não existe um mês relacionado ao número informado";
            }
        ?>
    </div>
</body>
</html>

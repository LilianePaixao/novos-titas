<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/exercicio6/style.css">
    <title>Exercicio 6</title>
</head>
<body>
    <h1> Exercício 6 </h1>
    <h3>Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número</h3>
        <fieldset>
            <form action = "/exercicio6/index.php" method="POST">
                <label for="n"> Digite um número inteiro entre 1 e 12:</label>
                <input type ="number" size= "10" maxlength ="10" name ="n" id="n">

                <input type="submit" value="Enviar" class="Enviar">
            </form>
        </fieldset>
        <?php
        
         $meses=['0','janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];
         
         $mesInformado=$meses[$_POST["n"]];

            if($_POST["n"] >= 1 && $_POST["n"] <= 12) {
                echo "O mês correspondente ao número digitado é ". $meses[$_POST["n"]];
            } elseif ($_POST["n"] < 1 && $_POST["n"] > 12){
                echo "Não existe um mês relacionado ao número informado";
            }
        ?>
   
</body>
</html>

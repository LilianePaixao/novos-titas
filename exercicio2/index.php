<!DOCTYPE html>
<head>
    <html lang="pt-br">
    <meta charset= "utf-8">
    <link rel="stylesheet" href="/exercicio2/style.css">

</head>
<body>
    <h1> Exercício 2 </h1>
    <h2> Digite um número e verifique se ele é divisível por; 2, 5 ou 10.</h2>
<fieldset>
    <form action = "/exercicio2/index.php" method="POST">
        <label for="numerodigitado" > Digite um número:</label>
        
        <input type="number"  name="number" id="numerodigitado" class="input-padrao" required placeholder= "O número pode ser inteiro, real..." maxlengyh:100px>
    
        <a href="/exercicio2/index.php">
            <input type="submit" value="Enviar">
        </a>   

    </form>
</fieldset>    
<?php
/* Entrar com um number e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes*/

if (empty($_POST["number"])){
    echo "";
}elseif ($_POST["number"] % 2 == 0 and $_POST["number"] % 5 == 0 and $_POST["number"] % 10 == 0){
    echo "O número informado: " . $_POST["number"]. " é divisível por 2, por 5 e 10";
}elseif ($_POST["number"] % 5 == 0 and $_POST["number"] % 10 == 0) {
    echo "O número informado: " . $_POST["number"]. " é divisível por 5 e 10";
}elseif ($_POST["number"] % 2 == 0) {
    echo "O número informado:  " . $_POST["number"]." é divisível por 2";
} elseif($_POST["number"] % 5 == 0){
    echo "O número informado:  " . $_POST["number"]." é divisível por 5";
} else {
    echo "O número informado: " . ($_POST["number"]) . " não é divisível por 10, por 5, nem por 2";
}

?>
</body>
</html>

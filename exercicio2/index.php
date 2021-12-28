<html>
<head>
    <link rel="stylesheet" href="style.css" 
</head>
<body>
    <h1> Exercício 2 </h1>
<fieldset>
    <form action = "index.php" method="POST">
        <label for="numerodigitado" > Digite um número:</label>
        
        <input type ="number"  name = "number" id="numerodigitado"class= "input-padrao" required placeholder= "O número pode ser inteiro, real...">
    
        <input type="submit" value="Enviar">
    </form>
</fieldset>    
<?php
/* Entrar com um number e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes*/

if ($_POST["number"] % 2 == 0) {
    echo "O número informado: " . $_POST["number"]. " é divisível por 2";
}elseif ($_POST["number"] % 5 == 0) {
    echo "O número informado: " . $_POST["number"]. " é divisível por 5";
}elseif ($_POST["number"] % 10 == 0) {
    echo "O número informado:  " . $_POST["number"]." é divisível por 10";
} else {
    echo "O número informado: " . ($_POST["number"]) . " não é divisível por 10, por 5, nem por 2";
}

?>
</body>
</html>

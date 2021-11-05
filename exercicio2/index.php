<html>
<head></head>
<body>
<div>
<form action = "index2.php" method="POST">
    <p> Digite um número: <input type ="number" size= "35" maxlength ="100" name = "number"  ></p>
</form>
<?php
/* Entrar com um number e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes*/

if($_POST["number"] % 10 == 0) {
    echo "O número informado " . $_POST["number"]." é divisível por 10";
}elseif ($_POST["number"] % 5 == 0) {
    echo "O número informado " . $_POST["number"]. "é divisível por 5";
}elseif ($_POST["number"] % 2 == 0) {
    echo "O número informado " . $_POST["number"]. "é divisível por 2";
} else {
    echo "O número informado" . ($_POST["number"]) . "não é divisível por 10, por 5, nem por 2";
}

?>
</div>
</body>
</html>

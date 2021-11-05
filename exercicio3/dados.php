<html>
<?php
/* Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA.*/
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
if ($_POST["fem"] && $_POST["idade"] < 25){
echo "$nome ACEITA";
}else{
    echo "$nome NÃO ACEITA";
} 
?>
<a href = "exercicio3.html">voltar</a>

/*
$value1 = $argv[1];
$value2 = $argv[2];

if($_POST["number"] % 10 == 0) {
    echo "O número informado " . $_POST["number"]." é divisível por 10";
}elseif ($_POST["number"] % 5 == 0) {
    echo "O número informado " . $_POST["number"]. "é divisível por 5";
}elseif ($_POST["number"] % 2 == 0) {
    echo "O número informado " . $_POST["number"]. "é divisível por 2";
} 
    echo "O número informado" . ($_POST["number"]) . "não é divisível por 10, por 5, nem por 2";
*/


</div>
</body>
</html>

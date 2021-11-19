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
            if ($_POST["sexo"]==="fem" && $_POST["idade"] < 25){ 
            echo "$nome ACEITA";
            }else{
        echo "$nome NÃO ACEITA";
            } 
    ?>
        <a href = "exercicio3.html">voltar</a>
</html>

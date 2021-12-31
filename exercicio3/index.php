<!DOCTYPE html>
    <head>  
        <html lang="pt-br">
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="/exercicio3/style.css">    
    </head>
    <body>
        <div class ="alert"> 
            <form method="post" action="/exercicio3/index.php">
                <label for="name">Nome:</label> 
                <input type="text" id="name"/><br/>
                <fieldset><legend>Sexo</legend>
                    <input type="radio" name="sexo" id="masc" value="homem"/>
                    <label for="masc"> Masculino </label><br/>
                    <input type="radio" name="sexo" id="fem" value="mulher">
                    <label for="fem"> Feminino </label><br/>
                </fieldset>
                <br/>   
                <label for="idade">Idade:</label>
                <input type="number" id="idade" value="idade"/><br/>
                <br/>
                <input type="submit" value="Enviar"/>
            </form>                        
        </div>
            <?php
/* Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.*/
                
                if($_POST["name"] == null and $_POST["sexo"]== null and $_POST["idade"]== null){
                    echo ""; 
                }elseif($_POST["sexo"] === "mulher" && $_POST["idade"] < 25 ){
                    echo $_POST["name"] . "ACEITA";
                }else{ 
                    echo $_POST["name"] . "NÃO ACEITA";
                }
                
            ?>
</html>

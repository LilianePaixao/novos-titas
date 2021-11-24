<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio7</title>
</head>
<body>
    <div>
        <form action = "index.php" method="POST">
            
            <label for="nomedolivro"> Digite o nome do livro que será emprestado:</label>
            <input type ="text" size= "100" maxlength ="100" name ="n" id="nomedolivro">

                <fieldset><legend>Tipo de usuário</legend>
                
                    
                    <input type="radio" name="tipousuario" id="prof" value="prof"/>
                    <label for="prof"> Professor </label><br/>
                    
                    
                    <input type="radio" name="tipousuario" id="alu" value="alu">
                    <label for="alu"> Aluno</label><br/>
                    

                </fieldset>
                <br/>   
            <input type="submit" value="Enviar">
        </form>
        <?php
        /* A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias */

            if($_POST["tipousuario"] == "prof" ) {
                echo "Professor você possui 10 dias para devolver o livro".$_POST["nomedolivro"] ;
            } elseif ($_POST["tipousuario"] == "alu" ){
                echo "Aluno você possui 3 dias para devolver o livro".$_POST["nomedolivro"];
            }
        ?>
    </div>
</body>
</html>

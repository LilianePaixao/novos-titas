<?php
//Conexão
//include_once 'php-action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- <link rel="stylesheet" href="/exercicio12/style.css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio14</title>
</head>

<body>
    <div class = "row">
        <div class ="col s12 m6 push-m3">
            <h3 class = "light">Estudantes</h3>
        <!-- <h1> Exercício 14</h1>
        <p> Chico tem 1,50m e cresce 2 centímetros por
ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. <br/>
Construir um algoritmos que calcule e imprima quantos anos serão
necessários para que Juca seja maior que Chico</p> -->
            <table class ="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Altura(cm)</th>
                        <th>Cresce por ano (cm)<th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chico</td>
                        <td>Silva</td>
                        <td>150</td>
                        <td>2</td>
                        <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>   
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>Juca</td>
                        <td>Almeida</td>
                        <td>110</td>
                        <td>3</td>     
                        <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>   
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>

                </tbody>
            </table>
            <br>
            <a href="" class="btn"> Adicionar estudante</a>
        
        <?php
            
                $ano = 0;
                $alunoUm = 150;
                $alunoDois = 110;

                while($alunoUm >= $alunoDois){
                //incrementa à idade de Chico;
                $alunoUm += 2;
                //incrementa à idade de Juca
                $alunoDois += 3;
                //conta mais um ano
                $ano++;
                }
            echo "Serão necessários $ano, para que o segundo aluno seja maior que o maior aluno"; 
       ?>
    </div>
</body>
</html>
<?php
//footer
include_once 'includes/footer.php';
?>

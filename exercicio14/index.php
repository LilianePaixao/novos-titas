<?php
//Conexão
include_once 'php-action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<div class = "row">
        <div class ="col s12 m6 push-m3">
            <h3 class = "light">Estudantes</h3>
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
                    <?php
                    // seleciona a tabela Estudantes no mysql
                    $sql = "SELECT * FROM Estudantes";
                    $resultado = mysqli_query($connect, $sql);
                    
                    while($dados = mysqli_fetch_array($resultado)){
                    ?>
                     <tr>
                        <td><?php echo $dados['name']; ?></td>
                        <td><?php echo $dados['lastname']; ?></td>
                        <td><?php echo $dados['higth']; ?></td>
                        <td><?php echo $dados['growth']; ?></td>
                        <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>   
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <a href="adicionar.php" class="btn"> Adicionar estudante</a>
        </div>
    </div>
        <div class = "row">
            <div class="col s12 m6 push-m3">
                <div class= "card green">
                    <div class ="card-content">
                        <span class="card-title"> Quantos anos serão necessários para que o menor estudante alcance o maior ?</span>
                            <?php
                        
                                $ano = 0;
                                $alunoUm = $resultadoAltura1;
                                $alunoDois = $resultadoAltura2;

                                while($alunoUm >= $alunoDois){
                                //incrementa à idade de Chico;
                                $alunoUm += 2;
                                //incrementa à idade de Juca
                                $alunoDois += 3;
                                //conta mais um ano
                                $ano++;
                                }
                                Echo "Serão necessários $ano, para que o segundo aluno seja maior que o maior aluno"; 
             
                            ?> 
       </div>
     </div>
    </div>
    </div>

<?php
//footer
include_once 'includes/footer.php';
?>
<?php
//Conexão
include_once 'php-action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class = "ligth"> Estudantes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Altura(cm):</th>
                    <th>Crescimento por ano(cm):</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM estudantes";
                $resultado = mysqli_query($connect, $sql);
                
                while ($dados = mysqli_fetch_array($resultado)){
                ?>
                    <tr>
                    <td><?= $dados['name'];?> </td>
                    <td><?= $dados['lastname'];?> </td>
                    <td><?= $dados['higth'];?></td>
                    <td><?= $dados['growth'];?></td>
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

<?php
//footer
include_once 'includes/footer.php';
?>
<?php
//Conexão
include_once 'php-action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m2">
        <h3 class="ligth">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                
                while ($dados = mysqli_fetch_array($resultado)){;
                ?>
                    <tr>
                    <td><?= $dados['name'];?> </td>
                    <td><?= $dados['lastname'];?> </td>
                    <td><?= $dados['email'];?></td>
                    <td><?= $dados['age'];?></td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php
                }; 
                ?>
            </tbody>
        </table>
        <br>
        <a href='/28-crud/adicionar.php' class="btn"> Adicionar cliente</a>
    </div>
</div>


    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>

    
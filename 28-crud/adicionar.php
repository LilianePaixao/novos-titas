<?php
//header
include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Novo Cliente</h3>
        <form action="php-action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="name" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="lastname" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="age" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
            <a href="index.php" class="btn green"> Lista de Clientes </a>

        </form>
    </div>
</div>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>

    
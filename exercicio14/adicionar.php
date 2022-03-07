<?php
//header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Novo Estudante</h3>
        <form action="php-action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="name" id="name">
                <label for="name">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="lastname" id="lastname">
                <label for="lastname">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="higth" id="higth">
                <label for="higth">Altura(cm)</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="growth" id="growth">
                <label for="growth" >Cresce por ano(cm)</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
            <a href="index.php" class="btn green"> Lista de Estudantes </a>

        </form>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>
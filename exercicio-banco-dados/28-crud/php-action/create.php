<?php
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);
    
    $sql = "INSERT INTO clientes (name,lastname, email,age) VALUES ('$name', '$lastname','$email', '$age')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;
endif;
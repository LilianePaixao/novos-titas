<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])){
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $higth = mysqli_escape_string($connect, $_POST['higth']);
    $growth = mysqli_escape_string($connect, $_POST['growth']);

    $sql = "INSERT INTO estudantes (name, lastname, higth, growth) VALUES('$name', '$lastname', '$higth', '$growth')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php?sucesso');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php?erro');
    }
}
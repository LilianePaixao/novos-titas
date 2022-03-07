<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])){
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $higth = mysqli_escape_string($connect, $_POST['higth']);
    $growth = mysqli_escape_string($connect, $_POST['growth']);
    
    //insere dados no banco de dados
    $sql = "INSERT INTO Estudantes (name, lastname, higth, growth) VALUES ('$name', '$lastname','$higth', '$growth')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php');
    }
}
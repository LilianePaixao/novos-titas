<?php
//Conexão com banco de dados
$serverbancodedados = "localhost:5555";
$username = "acf";
$password = "password";
$db_name = "exercicio14";

$connect = mysqli_connect($serverbancodedados, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo " Erro na conexão: " .mysqli_connect_error();
}
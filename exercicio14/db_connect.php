<?php
// Conexão com banco de dados
$servername = "localhost:5555";
$username = "root";
$password = "L1l1@n3";
$db_name = "exercicio14";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: " .mysqli_connect_error();
endif;

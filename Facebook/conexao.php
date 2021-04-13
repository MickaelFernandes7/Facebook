<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$database = 'facebook';

/*Conexão ao Banco de Dados*/
if( $conn = mysqli_connect($server, $user, $password, $database) ) {
    echo "Conectado!";
}
else{
    echo 'Não foi possível conectar ao MYSQL';
}





?>
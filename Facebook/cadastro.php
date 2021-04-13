<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$emailtel = $_POST['emailtel'];
$emailtelconfirm = $_POST['emailtelconfirm'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];

$strcon = mysqli_connect('localhost', 'root', 'root', 'facebook');
if (!$strcon) {
    die('Não foi possível conectar ao MYSQL');
}

else{
    mysqli_query( $strcon, "SET NAMES 'utf8'" );
    mysqli_query( $strcon, 'SET character_set_connection=utf8' );
    mysqli_query( $strcon, 'SET character_set_client=utf8' );
    mysqli_query( $strcon, 'SET character_set_results=utf8' );}
    
$sql = "INSERT INTO usuario(nome, sobrenome, emailtel, emailtel_confirm, senha , sexo)
VALUES ('$nome', '$sobrenome', '$emailtel', '$emailtelconfirm', '$senha', '$sexo')";

$resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
 mysqli_close($strcon);
 
 
 echo ("<script>
    alert('Usuário Cadastrado com Sucesso!');
    </script>");
    ?>
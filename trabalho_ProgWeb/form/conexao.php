<?php

$server = 'localhost';
$bdname = 'cadastro';
$user = 'root';
$pass = '';

$conexao = mysqli_connect($server, $user, $pass, $bdname);
if(!$conexao)
{
    die('Não foi possível se conectar ao banco de dados!<br><br>');
    echo mysqli_error($conexao);
}
else
    echo 'conexão realizada com sucesso!<br><br>';
?>
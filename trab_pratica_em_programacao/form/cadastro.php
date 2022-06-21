<?php

include ("conexao.php");

$nome = $_REQUEST['name'];
$nascimento = $_REQUEST['date'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['password'];

$sql = "INSERT INTO usuarios(`nome`, `nascimento`, `email`, `senha`) VALUES ('$nome', '$nascimento', '$email', '$senha')";

if(mysqli_query($conexao, $sql))
    echo "Cadastro realizado com sucesso!";
else
    echo "Erro na inserção dos dados!<br><br>Erro: ".mysqli_error($conexao);

mysqli_close($conexao);

?>
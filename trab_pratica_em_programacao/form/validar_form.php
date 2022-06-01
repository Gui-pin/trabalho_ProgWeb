<?php

$server = 'localhost';
$bdname = 'cadastro';
$user = 'root';
$pass = 'root';

$conexao = mysqli_connect($server, $user, $pass, $bdname);
if(!$conexao)
{
    die('Não foi possível se conectar ao banco de dados!')
    echo mysqli_error($conexao)
}

$cores = $_REQUEST['check'];
if (!empty($cores)) {
    echo '<b>Cores escolhidas:</b><br><br>';
    foreach($cores as $cor) {
        echo $cor . '<br>';
    }
}

else
    print_r("cor tem algo");


?>
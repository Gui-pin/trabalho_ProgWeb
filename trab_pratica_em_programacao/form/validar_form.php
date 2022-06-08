<?php

$server = 'localhost';
$bdname = 'cadastro';
$user = 'root';
$pass = '';

$conexao = mysqli_connect($server, $user, $pass, $bdname);
if(!$conexao)
{
    die('Não foi possível se conectar ao banco de dados!');
    echo mysqli_error($conexao);
}
else
    echo 'conexão realizada com sucesso!<br><br>';

$cores = isset($_REQUEST['check']) ? $_REQUEST['check'] : null;
if (!empty($cores)) {
    echo '<b>Cores escolhidas:</b><br><br>';
    foreach($cores as $cor) {
        echo $cor . '<br>';
    }
}

else
    print_r("Nenhuma cor foi escolhida");


?>
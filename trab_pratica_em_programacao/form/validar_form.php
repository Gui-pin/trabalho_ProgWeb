<?php

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
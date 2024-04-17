<?php

if(isset($_GET["my_index"])){
    echo "ciao";
}

$discs = file_get_contents('dischi.json');  //legge il contenuto del file dischi. json e lo restituisce come stringa
header('Content-type: application/json');      //specifico con header che i file restituiti sono di type json
echo $discs;    //stampo la stinga tradotta

?>
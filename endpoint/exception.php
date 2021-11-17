<?php
    switch ($_GET['failure_code']){
        case 1:  echo "file non permesso"; break;
        case 2: echo "errore durante il caricamento del file "; break;
        default: echo "errore sconosciuto"; break;
    }
    

?>
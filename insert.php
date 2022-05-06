<?php

if($_POST['resposta']){

    foreach ($_POST['resposta'] as $key => $value) {
        
        echo " Eneylton - ".$value;
    }

}

?>
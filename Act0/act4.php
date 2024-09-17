<?php
$numero = 0;

if(esprimer($numero)){
    echo 'Es primer ';
}else{
    echo 'No es primer';
}

function esprimer($numero)
{
    if(!is_numeric($numero))
        return false;
    for ($i = 2; $i < $numero; $i++) {
        if (($numero % $i) == 0) {
            return false;
        }
    }
    return true;
}



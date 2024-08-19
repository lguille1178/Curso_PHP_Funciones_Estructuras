<?php

function obtenerhora(){
    
    return date('m/d/Y h:i:s a', time());;
}

echo "hola me podrias decir que hora es \n";
echo "claro son las:".obtenerhora();

?>
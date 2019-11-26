<?php
    session_start();
    
    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"]=0;
        
    }

if(isset($_POST["reiniciar"])){
    //reiniciar el contador en 0
    $_SESSION["contador"]=0;
    
}


if(isset($_POST["incrementar"])){
    //se debe sumar 1 al contador
    $_SESSION["contador"]= $_SESSION["contador"] + 1;
    
}
echo $_SESSION["contador"];

?>
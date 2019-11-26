<?php
session_start();

// $_SESSION[""];
    // var_dump($_POST["username"]);
    if($_POST["username"] != ""){
        if(isset($_POST["agregar"])){
            $_SESSION["usename"][]= $_POST["username"];
            
            var_dump ($_SESSION["usename"]);
        }
        if(isset($_POST["eliminar"])){
            
            foreach($_SESSION["usename"] as $key => $value){
                if($value == $_POST["username"]){
                   //si encuentra el username :lo borra
                   unset($_SESSION["usename"][$key]);
                   //echo "se borro ".$_SESSION["usename"][$key]."";
                   var_dump ($_SESSION["usename"]);

                   
                }else{
                    //si no lo encuentra: avisa
                    echo "no lo encontro";
                }
            }
        }

        
    }else{
        echo "El username debe ser mayor a 0 <br>";
        var_dump ($_SESSION["usename"]);
    }

    


?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>PHP</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<script src='main.js'></script>
</head>
<body>
<?php
    // $persona[
    //     "Nombre" => "Jon",
    //     "Apellido" => "Snow",
    //     "Edad" => 27,
    //     "Hobbies" => ["Netflix","Fútbol","Programar"]
    // ];  
    // $persona["Edad"]=25;
    // $persona[]="Winterfell";
    // $persona["Hobbies"]="Fumar";
    
    $persona["Nombre"]="Jon";
    $persona["Apellido"]="Snow";
    $persona["Edad"]=27;
    $persona["Hobbies"]=["Netflix","Fútbol","Programar"];
    $persona["Edad"]=25;
    $persona["Hobbies"][]="Fumar";

    var_dump($persona);
    ?>

</body>
</html>
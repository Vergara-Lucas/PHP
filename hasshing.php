<?php
    $contraseña="monuto123";
    $hash= password_hash($contraseña, PASSWORD_DEFAULT);
    var_dump($contraseña,$hash);
    $resultado = password_verify($contraseña,$hash);
    var_dump($resultado);
?>
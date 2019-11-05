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
<h1>Parte 1</h1>
<p>1.Escribir en código una variable $persona que sea un array con la siguiente información.
Nombre:Jon
Apellido:Snow
Edad:27
Hobbies:Programar,Netflix,Fútbol.
</p>
<p>2.Modificar la edad del array anterior a 25.</p>
<p>3.Agregar un campo Dirección con la el valor “Winterfell”</p>
<p>4.Agregar un cuarto hobby.</p>
</p>
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
    <h1>Condicionles</h1>
    <h2>Ejercicio 1</h2>
    <p>Definir dos variable con números y compararlos con un if para decidir cuál número
    
    es mayor e imprimir 
    “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor,
    y un else para cubrir el caso inverso.</p>
    <div style="text-align:center;border: solid;">
    <h3 style="border: solid;margin-top: 0%;">resultado</h3>
    <?php 
    
    
    $num1=30;
    $num2=20;
    if($num1>$num2){
        echo("El número mayor es $num1");
    }else{
        echo("El número mayor es $num2");
    }
    ?>
    </div>
    <h2>Ejercicio 2</h2>
    <p>Utilizando la función propia de PHP rand(x,y),
    donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5
    , asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5.</p>
    <div style="text-align:center;border: solid;">
    <h3 style="border: solid;margin-top: 0%;">resultado</h3>
    <?php
    
    $rand=rand(1,5);
    echo("Numero:$rand---------");
    
    if($rand>=3){
        echo("El Numero aleatorio es: $rand");
    }
    
    ?>
    </div>
    <h2>Ejercicio 3</h2>
    <p>Utilizando la variable del ejercicio anterior, 
    imprimir “El número NO es 3” en el caso que sea verdad esa premisa.
    En el caso que sí lo sea que simplemente se imprima el número 3.</p>
    <div style="text-align:center;border: solid;">
    <h3 style="border: solid;margin-top: 0%;">resultado</h3>
    <?php
    echo("Numero:$rand---------");
    if($rand==3){
        echo("El numero es 3");
    }else{
        echo("El numero NO es 3");
    }
    
    ?>    
    </div>
    <h2>Ejercicio 4</h2>
    <p>Generar un número entre 1 y 100, controlar si es mayor que 50.
         En el caso que sea verdadero, devolver “El número es mayor a 50”,
          en el caso que sea falso: “El número es menor a 50”.

¿Qué pasa si el número es 50?</p>
    <div style="text-align:center;border: solid;">
    <h3 style="border: solid;margin-top: 0%;">resultado</h3>
    <?php
    $rand1al100=rand(1,100);
    echo("Numero:$rand1al100---------");
    if($rand1al100>50){
        echo("El numero es mayor a 50");
    }else{
        echo("El numero es menor a 50");
    }
    
    ?>    
    </div>
    <h2>Ejercicio 4</h2>
    <p>Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser asi, que imprima "Bienvenido!", sino, que imprima que hay un error en el login.

 

a.    Modificar al ejercicio anterior, y agregar los "else" necesarios para poder identificar si el error esta en el usuario, la contraseña, o si alguno de los campos está vacío aún.</p>
    <div style="text-align:center;border: solid;">
    <h3 style="border: solid;margin-top: 0%;">resultado</h3>
    <?php
    $rand1al100=rand(1,100);
    echo("Numero:$rand1al100---------");
    if($rand1al100>50){
        echo("El numero es mayor a 50");
    }else{
        echo("El numero es menor a 50");
    }
    
    ?>    
    </div>
    
    </body>
    </html>
    
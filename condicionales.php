<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>condicionales</title>
</head>
<body>
    <h1>Condicionles</h1>
    <h2>Ejercicio 1</h2>
    <div style="text-align:center;border: solid;">
    <h3 style="border: solid;margin-top: 0%;">resultado</h3>
        <?php 
            /*Definir dos variable con números y compararlos con un if para decidir cuál número

            es mayor e imprimir 
            “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor,
            y un else para cubrir el caso inverso.*/
        
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
    <div style="text-align:center;border: solid;">
        <h3 style="border: solid;margin-top: 0%;">resultado</h3>
        <?php
            /*Utilizando la función propia de PHP rand(x,y),
            donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5
            , asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5. */
            $rand=rand(1,5);
            echo($rand);

        ?>
    </div>
</body>
</html>
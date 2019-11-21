<?php
    if($_FILES){
        
        if ($_FILES["cv"]["error"] != 0) {
            echo "hubo un error";
        }
        else{
            move_uploaded_file($_FILES["cv"]["tmp_name"],"C:\laragon\www\php\pruebas\cv.pdf");
        }
        if ($_FILES["imagen"]["error"] != 0) {
            echo "hubo un error";
        }else {
            move_uploaded_file($_FILES["imagen"]["tmp_name"],"C:\laragon\www\php\pruebas\imagen.png");
        }
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">CV</label>
            <input type="file" name="cv" id="">
        </div>
        <div>
            <label for="">imagen</label>
            <input type="file" name="imagen" id="">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
<?php
    // $autos=[
    //     0 => [
    //         "marca" => "ford",
    //         "modelo" => "fiesta",
    //         "patente" => "abc123"
    //     ]

    // ];
    // $json = json_encode($autos);
    // file_put_contents("autos.json",$json);
    $archivos = file_get_contents("autos.json");
    // echo $archivos;
    $autos = json_decode($archivos,true);
    $autos[]=[
        "marca" => "renault",
        "modelo" => "sandero",
        "patente" => "asd132"
    
    ];
    // var_dump($autos);
    $jsonFinal = json_encode($autos);
    file_put_contents("autos.json",$jsonFinal);
    
            
?>
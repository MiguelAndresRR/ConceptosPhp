<?php
    $arreglo = [
        "Primer_nombre" => "Pedro",
        "Segundo_Nombre" => "Pablo",
        "Primer_Apellido" => "Perez",
        "Segundo_Apellido" => "Pereira"
    ];
    foreach($arreglo as $llave => $elemento)
    {
        echo "$llave: $elemento <br>";
    };
?>
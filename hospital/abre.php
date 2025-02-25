<?php
    $conexion = new mysqli("localhost","root", "","hospital");
    if($conexion){
        echo "la gestion fue exitosa";
    }else{
        echo "algo salio mal";
    }



?>
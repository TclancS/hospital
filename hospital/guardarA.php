<?php
    include("abre.php"); 

    $Nombre = $_POST['Nombre'];
    $Telefono   = $_POST['Telefono'];
    $TelefonoFamilia   = $_POST['TelefonoFamilia'];
    $Direccion   = $_POST['Direccion'];

    $consulta ="INSERT INTO paciente(Nombre, Telefono, TelefonoFamilia, Direccion) VALUES ('$Nombre' , '$Telefono', '$TelefonoFamilia', '$Direccion')";

    if($conexion->query($consulta) === TRUE){
        header("Location: paciente.html");
    }else{
        echo "Error: " .$consulta."<br>". $conexion->error;
    }
    $conexion->close();


?>
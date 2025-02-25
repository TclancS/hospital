<?php
    include("abre.php"); 

    $NumeroHabitacion = $_POST['NumeroHabitacion'];
    $Paciente   = $_POST['Paciente'];
    $PersonalAsignado   = $_POST['PersonalAsignado'];
    $TiempoEstancia   = $_POST['TiempoEstancia'];

    $consulta ="INSERT INTO habitacion(NumeroHabitacion, Paciente, PersonalAsignado, TiempoEstancia) VALUES ('$NumeroHabitacion' , '$Paciente', '$PersonalAsignado' , '$TiempoEstancia')";

    if($conexion->query($consulta) === TRUE){
        header("Location: habitacion.html");
    }else{
        echo "Error: " .$consulta."<br>". $conexion->error;
    }
    $conexion->close();


?>
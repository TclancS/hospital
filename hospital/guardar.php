<?php
    include("abre.php"); 

    $Nombre = $_POST['Nombre'];
    $NumeroEmpleado   = $_POST['NumeroEmpleado'];
    $RFC   = $_POST['RFC'];
    $CURP   = $_POST['CURP'];
    $Telefono   = $_POST['Telefono'];
    $puesto   = $_POST['puesto'];

    $consulta ="INSERT INTO empleados(Nombre, NumeroEmpleado, RFC, CURP, Telefono, puesto) VALUES ('$Nombre' , '$NumeroEmpleado', '$RFC', '$CURP', '$Telefono', '$puesto')";

    if($conexion->query($consulta) === TRUE){
        header("Location: index.html");
    }else{
        echo "Error: " .$consulta."<br>". $conexion->error;
    }
    $conexion->close();


?>
